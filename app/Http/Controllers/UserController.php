<?php

namespace App\Http\Controllers;

use App\Mail\SendInviteToCompany;
use App\Models\Company;
use App\Models\Invite;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;

class UserController extends Controller
{
    public function account(){
        $isAdmin = Auth::user()->hasRole('Admin');
        $company = Auth::user()->org;
        $pay_date = Carbon::parse($company->pay_date)->format('d.m.Y');
        $end_date = Carbon::parse($company->end_date)->format('d.m.Y');
        return Inertia::render('Account/Main', ['isAdmin' => $isAdmin, 'pay_date' => $pay_date, 'end_date' => $end_date]);
    }


    public function subscribe(Request $request)
    {
        $invite = new Invite();
        $invite->content = $request->all();
        $invite->save();
        if ($invite->content['data']['paidplan.priceamount'] != 0){
        $invite->email = $invite->content['data']['contact.Email[0]'];
        $invite->invite_code = Str::random(40);
        $invite->save();

        Mail::to($invite->email)->send(new SendInviteToCompany($invite->invite_code, \url()->to('/')));
        return 'success';
        }
        else{
            return 'error';
        }
    }

    public function cancel(Request $request) {
        $content = $request->all();
        $user = User::where('email', $content['data']['contact.Email[0]'])->first();
        $company = $user->org;
        $company->end_date = Carbon::now();
        $company->pay_status = 1;
        $company->save();
    }

    public function addUser() {
        return Inertia::render('Home/Users/AddUser');
    }

    public function storeUser(Request $request) {
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'max:255'],
            'job_title' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'pay_date' => ['required'],
            'end_date' => ['required'],
        ])->validate();


        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'job_title' => $request['job_title'],
            'password' => Hash::make($request['password']),
        ]);

        $company = Company::create([
            'title' => $request['title'],
            'user_id' => $user->id,
            'pay_date' => Carbon::parse($request['pay_date']),
            'end_date' => Carbon::parse($request['end_date']),
        ]);
        if (Carbon::parse($request['end_date']) > Carbon::now()){
            $company->pay_status = 0;
        }
        else{
            $company->pay_status = 1;
        }
        $company->save();

        $user->assignRole('Admin');

        return redirect()->route('dashboard');
    }

}
