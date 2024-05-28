<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class VerifyEmailController extends Controller
{
    public function verify(Request $request) {
        $validator = Validator::make($request->all(), ['token' => 'required']);

        if($validator->fails()) {
            return redirect('/signin')->with('loginError', 'Token is required');
        } 

        $user = User::firstWhere(['email_verification_token' => $request->input('token')]);

        if($user) {
            $user->update(['email_verified_at' => now()]);
            Auth::login($user);  
            return redirect('/dashboard');
        } else {
            redirect('/signin')->with('loginError', 'Token invalid');
        }
    }

    public function show_reset_form(Request $request) {
        $validator = Validator::make($request->all(), ['password_reset_token' => 'required']);

        if($validator->fails()) {
            return redirect('/signin')->with('loginError', 'Token is required');
        } 

        $user = User::firstWhere(['password_reset_token' => $request->input('password_reset_token')]);
        if($user) {
            return view('resetPassword', [
                'title' => 'Reset Password',
                'token' => $user->password_reset_token,
            ]);
        } else {
            redirect('/signin')->with('loginError', 'Token invalid');
        }
    }

    public function reset_password(Request $request) {
        $validator = Validator::make($request->all(), [
            'password_reset_token' => 'required',
            'password' => 'required|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/',
            'password_confirmation' => 'required|same:password'
        ]);
        
        if($validator->fails()) {
            return redirect('/signin')->with('Reset Error', 'Token is required');
        } 

        $user = User::firstWhere(['password_reset_token' => $request->input('password_reset_token')]);

        if($user) {
            $user->update(['password' => Hash::make($request->input('password'))]);
            return redirect('/signin');
        } else {
            redirect('/signin')->with('Reset Error', 'Token invalid');
        }
    }
}
