<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VerifyEmailController extends Controller
{
    public function verify(Request $request) {
        // $request->validate([
        //     'token' => 'required',
        // ]);

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
}
