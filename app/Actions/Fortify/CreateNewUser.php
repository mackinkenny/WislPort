<?php

namespace App\Actions\Fortify;

use App\Models\Company;
use App\Models\Invite;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'phone' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();


        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'password' => Hash::make($input['password']),
        ]);

        $invite = Invite::where('email',$input['email'])->first();
        $invite->status = 1;
        $invite->save();

        $company = Company::create([
            'title' => $input['title'],
            'user_id' => $user->id,
            'pay_date' => Carbon::parse(json_decode($invite->content['data']['start.date'])),
            'end_date' => Carbon::parse(json_decode($invite->content['data']['start.date']))->addMonths(intval($invite->content['data']['paidplan.validfor'])),
        ]);

        $user->assignRole('Admin');
        return $user;
    }
}
