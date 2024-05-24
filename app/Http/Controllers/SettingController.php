<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index() {
        $user = User::where('id', auth()->user()->id)->first();

        return view('setting', [
            'title' => 'Setting',
            'user' => $user,
        ]);
    }

    public function update(Request $request) {
        $user = auth()->user();

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'profilePicture' => 'file|max:2048',
        ]);
        
        if($request->file('profilePicture')) {
            $validatedData['profilePicture'] = $request->file('profilePicture')->store('images');
        }

        User::where('id', $user->id)->update($validatedData);

        return redirect('/profile');
    }
}
