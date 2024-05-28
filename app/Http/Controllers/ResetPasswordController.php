<?php

namespace App\Http\Controllers;

use App\Mail\ResetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    public function index() {
        return view('forget_password', [
            'title' => 'Reset Password'
        ]);
    }

    public function send_token(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|email:dns',
        ]);

        $validatedData['password_reset_token'] = Str::random(60);

        $user = User::firstWhere([
            'email' => $validatedData['email']
        ]);

        if($user) {
            $user->update(['password_reset_token' => $validatedData['password_reset_token']]);
            Mail::to($request['email'])->send(new ResetPassword($user));

            return view('verify', ['title' => 'Confirm Email']);
        } else {
            return redirect('/signup');
        }
    }
}
