<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\BookmarkMenuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\VerifyEmailController;
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

// TODO : FILTER SEARCH, FORGET PASSWORD

Route::get('/', [HomeController::class, 'index']);

Route::get('/signup', [RegisterController::class, 'index']);
Route::post('/signup', [RegisterController::class, 'store']);

Route::get('/email/verify', [VerifyEmailController::class, 'verify'])->name('verification.verify');

Route::get('/signin', [LoginController::class, 'index']);
Route::post('/signin', [LoginController::class, 'authenticate']);

// Route::get('/forgetPassword', [ResetPasswordController::class, 'index']);
Route::get('/forgetPassword', [ResetPasswordController::class, 'index'])->name('password.request');
Route::post('/forgetPassword', [ResetPasswordController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');


Route::get('/auth/redirect', [GoogleLoginController::class, 'redirect']);
Route::get('/auth/google/callback', [GoogleLoginController::class, 'callback']);

Route::middleware('isLoggedIn')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('menu.index');

    Route::post('/bookmark', [BookmarkMenuController::class, 'store'])->name('bookmark_menu.store');
    Route::get('/bookmark', [BookmarkController::class, 'index']);

    Route::get('/detail/{id}', [RecipeController::class, 'index']);

    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/setting', [SettingController::class, 'index']);
    Route::post('/setting', [SettingController::class, 'update']);
    Route::get('/logout', [LoginController::class, 'logout']);
});