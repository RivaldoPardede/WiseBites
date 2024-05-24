<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/signup', [RegisterController::class, 'index']);
Route::post('/signup', [RegisterController::class, 'store']);

Route::get('/signin', [LoginController::class, 'index']);
Route::post('/signin', [LoginController::class, 'authenticate']);

Route::get('/forgetPassword', function () {
    return view('resetPassword', [
        'title' => 'Reset Password'
    ]);
});

Route::get('/auth/redirect', [GoogleLoginController::class, 'redirect']);
Route::get('/auth/google/callback', [GoogleLoginController::class, 'callback']);

Route::middleware('isLoggedIn')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/bookmark', [BookmarkController::class, 'index']);
    Route::get('/detail', function () {
        return view('detailrecipe', [
            'title' => 'Detail Recipe'
        ]);
    });
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/setting', [SettingController::class, 'index']);
    Route::post('/setting', [SettingController::class, 'update']);
    Route::get('/logout', [LoginController::class, 'logout']);
});

Route::get('/tes', function () {
    return view('emailVerification', [
        'title' => 'tes'
    ]);
});