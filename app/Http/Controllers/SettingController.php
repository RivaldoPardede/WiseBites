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

        if($user->password != $request['oldPassword']) {
            return redirect()->back();
        }

        if($request['newPassword'] != $request['confirmPassword']) {
            return redirect()->back();
        }

        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'image' => 'file|max:2048',
            'password' => 'required|min:5|max:255|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/'
        ]);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        dd($request);

        User::where('id', $user->id)->update($validatedData);

        return redirect('/profile');
    }
}
