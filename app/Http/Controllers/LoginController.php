<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('signin', [
            'title' => 'Sign In'
        ]);
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:255|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/dashboard');
        }
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}
