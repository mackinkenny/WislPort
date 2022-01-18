<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Mail\sendInvite;
use App\Models\Company;
use App\Models\Invite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Jetstream\Jetstream;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class InviteController extends Controller
{
    use PasswordValidationRules;
    /**
     * The guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;
    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\StatefulGuard  $guard
     * @return void
     */
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    public function sendInvite(Request $request){
        $email = Invite::where('email', $request->email)->first();
        $user = User::where('email')->first();

        if ($email || $user) {
            return response()->json([
               'error' => true,
            ]);
        }

        $invite = Invite::create([
            'email' => $request->email,
            'company_id' => $request->id,
            'invite_code' => Str::random(40),
        ]);
        $invites = Invite::where('company_id',$request->id)->get();
        Mail::to($request->email)->send(new sendInvite($invite->invite_code, \url()->to('/')));
        return response()->json([
            'status' => true,
            'invites' => $invites
        ]);
    }

    public function deleteInvite(Request $request){
        $invite = Invite::find($request->id);
        $invite->delete();

        return response()->json([
           'status' => true,
        ]);
    }

    public function register_user(Request $request) {
        $invite = Invite::where('invite_code',$request->code)->where('status', 0)->first();
        if ($invite){
            return Inertia::render('Auth/RegisterUser',[
                'email' => $invite->email,
                'code' => $request->code,
                'id' => $invite->company_id,
            ]);
        }
        else{
            return redirect()->route('dashboard');
        }
    }

    public function register_company(Request $request) {
        $invite = Invite::where('invite_code',$request->code)->where('status', 0)->first();
        if ($invite){
            $name = $name = $invite->content['data']['contact.Name.First'].' '.$invite->content['data']['contact.Name.Last'];

            return Inertia::render('Auth/Register',[
                'email' => $invite->email,
                'code' => $request->code,
                'name' => $name
            ]);
        }
        else{
            return redirect()->route('dashboard');
        }
    }

    public function register(Request $request){
        $invite = Invite::where('invite_code',$request->code)->first();
//        $invite->status = 1;
        $invite->delete();

        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['nullable', 'string', 'max:20'],
            'job_title' => ['nullable', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'job_title' => $request['job_title'],
            'password' => Hash::make($request['password']),
            'company_id' => $invite->company_id,
        ]);
        $user->assignRole('User');
        Auth::loginUsingId($user->id);

        return redirect()->route('dashboard');
    }
}
