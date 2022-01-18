<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Jetstream\Jetstream;

class CompanyController extends Controller
{
    //
    use PasswordValidationRules;

    public function changeStatus($id) {
        $company = Company::find($id);
        $company->status = !$company->status;
        $company->save();

        return $company;
    }

    public function search(Request $request)
    {
        if ($request->search != null || $request->pay_date != null || $request->end_date != null) {
            $ids = collect();
            $searches = collect();
            $pays = collect();
            $ends = collect();
            if ($request->search != null) {
                $users = User::where('name', 'like', "%$request->search%")->orWhere('email', 'like', "%$request->search%")->where('company_id', null)->get();
                if (count($users)) {
                $ids = $users->map(function ($user) {
                    if (!$user->hasRole('SuperAdmin')) {
                        return $user->org->id;
                    }
                });
                }

                $searches = Company::where('title', 'like', "%$request->search%")->pluck('id');
            }

            if ($request->pay_date) {
                $pays = Company::where('pay_date', $request->pay_date)->pluck('id');
            } elseif ($request->end_date) {
                $ends = Company::where('end_date', $request->end_date)->pluck('id');
            } else {

            }
            $ids = $ids->merge($searches);
            $ids = $ids->merge($pays);
            $ids = $ids->merge($ends);
            $companies = Company::With('users')->With('owner')->whereIn('id', $ids)->get();

            return $companies;
        }
        else
        {
            $companies = Company::With( 'users')->With('owner')->get();
            return $companies;
        }
    }

    public function renew (Request $request) {
        $company = Company::where('id', $request->id)->With('owner', 'users')->first();
        Validator::make($request->company, [
            'name' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($company->owner->id)],
            'password' => ['nullable', 'string', 'min:8'],
        ])->validate();

        $company->title = $request->company['title'];
        $company->pay_date = Carbon::parse($request->company['pay_date']);
        $company->end_date = Carbon::parse($request->company['end_date']);
        if (Carbon::parse($request->company['end_date']) > Carbon::now()){
            $company->pay_status = 0;
        }
        else{
            $company->pay_status = 1;
        }
        $company->save();

        $user = $company->owner;
        $user->name = $request->company['name'];
        $user->email = $request->company['email'];
        $user->phone = $request->company['phone'];
        $user->job_title = $request->company['job_title'];
        if (isset($request->company['password'])){
            $user->password = Hash::make($request->company['password']);
        }
        $user->save();

        return $company;
    }

    public function UpdateUser(Request $request) {
        Validator::make($request->user, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($request->user['id'])],
            'password' => ['nullable', 'string', 'min:8'],
        ])->validate();

        $user = User::find($request->user['id']);
        $user->name = $request->user['name'];
        $user->email = $request->user['email'];
        $user->phone = $request->user['phone'];
        $user->job_title = $request->user['job_title'];
        if (isset($request->user['password'])) {
            $user->password = Hash::make($request->user['password']);
        }
        $user->save();

        $company = Company::where('id', $user->company_id)->with('owner', 'users')->first();

        return $company;
    }
}
