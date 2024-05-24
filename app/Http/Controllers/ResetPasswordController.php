<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    public function index() {
        return view('resetPassword', [
            'title' => 'Reset Password'
        ]);
    }

    public function reset(Request $request) {
        $request->validate(['email' => 'required|email:dns']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
    }
}
