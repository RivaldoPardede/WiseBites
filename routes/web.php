<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
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

Route::view('/', 'home', [
    'title' => 'WiseBites'
]);

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/bookmark', [BookmarkController::class, 'index']);

Route::get('/detail', function () {
    return view('detailrecipe', [
        'title' => 'Detail Recipe'
    ]);
});

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/setting', [SettingController::class, 'index']);