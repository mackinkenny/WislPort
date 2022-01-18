<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\PaidStatus;
use App\Http\Middleware\RedirectIfAdmin;
use App\Http\Middleware\RedirectSuperAdmin;
use App\Http\Middleware\StatusCompany;
use App\Models\Company;
use App\Models\Question;
use App\Models\Report;
use http\Url;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return Inertia::render('Auth/Login', [
        'canLogin' => Route::has('login'),
        'canForgot' => Route::has('forgot-password'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('/');
Route::middleware(['auth:sanctum', 'verified', StatusCompany::class, PaidStatus::class])->group(function () {
    Route::get('/dashboard', function () {
        $status = Auth::user()->hasRole('SuperAdmin');
        $isAdmin = Auth::user()->hasRole('Admin');

        $companies = Company::With( 'users')->With('owner')->get();
        if (Auth::user()->hasRole('SuperAdmin')){
            return Inertia::render('Home/Homepage',[
                'companies' => $companies,
                'status' => $status,
                'isAdmin' => $isAdmin,
            ]);
        }
        else
        {
            $reports = Report::where('company_id', Auth::user()->hasRole('Admin') ? Auth::user()->org->id : Auth::user()->company->id)->get();
            $check = count($reports);
            return Inertia::render('Home/Homepage',[
                'companies' => $companies,
                'status' => $status,
                'isAdmin' => $isAdmin,
                'check' => $check
            ]);
        }
    })->name('dashboard')->middleware(['auth:sanctum', 'verified']);

    Route::get('/tool', [ToolController::class, 'index'])->name('tool')->middleware([RedirectSuperAdmin::class,'auth:sanctum', 'verified']);
    Route::get('/tool/blocks/{id}', [ToolController::class, 'blocks'])->name('blocks')->middleware([RedirectSuperAdmin::class,'auth:sanctum', 'verified']);
    Route::get('/tools', [ToolController::class, 'getQuestions'])->name('tools')->middleware([RedirectSuperAdmin::class,'auth:sanctum', 'verified']);
    Route::get('/members', [MemberController::class, 'index'])->name('members')->middleware([RedirectSuperAdmin::class,'auth:sanctum', 'verified']);
    Route::get('/account', [UserController::class, 'account'])->name('account')->middleware([RedirectSuperAdmin::class,'auth:sanctum', 'verified']);
    Route::get('/faq', [FaqController::class, 'index'])->name('faq')->middleware([RedirectSuperAdmin::class,'auth:sanctum', 'verified']);
    Route::get('/report/{company}/close', [ReportController::class, 'close'])->name('report.close')->middleware([RedirectSuperAdmin::class, \App\Http\Middleware\RedirectUser::class,'auth:sanctum', 'verified']);
    Route::get('/report/{id}/{version?}', [ReportController::class, 'index'])->name('report')->middleware([RedirectSuperAdmin::class,'auth:sanctum', 'verified']);
    Route::get('/reports/{company}', [ReportController::class, 'all'])->name('reports')->middleware([RedirectSuperAdmin::class, \App\Http\Middleware\RedirectUser::class,'auth:sanctum', 'verified']);
    Route::get('/overall/report/{version?}', [ReportController::class, 'overall'])->name('overall/report')->middleware([RedirectSuperAdmin::class,'auth:sanctum', 'verified']);
});
Route::get('/addUser', [UserController::class, 'addUser'])->name('addUser')->middleware(['auth:sanctum', 'verified', RedirectIfAdmin::class]);
Route::post('/storeUser', [UserController::class, 'storeUser'])->name('storeUser')->middleware('auth:sanctum');
Route::get('/CompanyStatus/{id}', [CompanyController::class, 'changeStatus'])->name('CompanyStatus');
Route::get('/adminReport', [ReportController::class, 'adminReport'])->name('adminReport')->middleware('auth:sanctum');
Route::post('/sendInvite', [InviteController::class, 'sendInvite']);
Route::post('/deleteInvite', [InviteController::class, 'deleteInvite']);
Route::get('/register/user/{code}',[InviteController::class, 'register_user']);
Route::get('/register/company/{code}',[InviteController::class, 'register_company']);
Route::post('/register/user', [InviteController::class, 'register'])->name('register/user');
Route::get('/pdf/{id}/{version?}', [ReportController::class, 'ReportToPdf'])->name('pdf');
Route::get('/csv/{id}/{version?}', [ReportController::class, 'reportToExcel'])->name('csv');
Route::get('/word/{id}/{version?}', [ReportController::class, 'reportToWord'])->name('word');
Route::get('/saveAnswer/{id}/{company}', [ReportController::class, 'store'])->name('saveAnswer');
Route::get('/saveComment/{value}/{company}/{id}', [ReportController::class, 'store_comment'])->name('saveComment');
Route::post('/search/company', [CompanyController::class, 'search'])->name('search/company');
Route::post('/renew', [CompanyController::class, 'renew'])->name('renew');
Route::post('/UpdateUser', [CompanyController::class, 'UpdateUser'])->name('UpdateUser');
Route::get('/disabledCompany', function(){
   return Inertia::render('Disable');
})->name('disable');
Route::get('/unpaid', function () {
    return Inertia::render('Unpaid');
})->name('unpaid');

Route::get('/lang/{lang}', function ($lang) {
    \Illuminate\Support\Facades\Session::put('lang', $lang);

    return redirect()->back();
});

