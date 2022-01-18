<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class MemberController extends Controller
{
    public function index(){
        $isAdmin = Auth::user()->hasRole('Admin');
        $company = Company::where('id',Auth::user()->org->id)->With('users')->With('invites')->first();

        return Inertia::render('Members/Main',[
            'company' => $company,
            'isAdmin' => $isAdmin
        ]);
    }
}
