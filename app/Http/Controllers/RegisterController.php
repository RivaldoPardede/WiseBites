<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index() {
        return view('signup', [
            'title' => 'Sign Up'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['email_verification_token'] = Str::random(60);

        $user = User::create($validatedData);

        Mail::to($user->email)->send(new VerifyEmail($user));

        return 'ok';

        // return redirect('/email/verify');
    }

    // public function sendVerifyToken() {

    // }

    // public function 
}
