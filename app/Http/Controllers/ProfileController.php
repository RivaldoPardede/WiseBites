<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index() {
        $user = User::where('id', auth()->user()->id)->first();

        return view('profile', [
            'title' => 'Profile',
            'user' => $user,
        ]);
    }
}
