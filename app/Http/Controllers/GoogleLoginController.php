<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirect() {
        return Socialite::driver('google')->redirect();
    }

    public function callback() {
        try {
            $user = Socialite::driver('google')->stateless()->user();
    
            $registeredUser = User::where('google_id', $user->id)->first();
    
            if (!$registeredUser) {
                $user = User::create([
                    'google_id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => Hash::make('password'),
                    'google_token' => $user->token,
                    'google_refresh_token' => $user->refreshToken,
                ]);
                
                return redirect('/dashboard');
            } else {
                Auth::login($registeredUser, true);
                return redirect()->intended('/dashboard');
            }
        } catch(Exception $e) {
            return redirect('/login');
        }
    }
}
