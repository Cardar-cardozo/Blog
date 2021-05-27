<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Registercontroller;
use App\Http\Controllers\Auth\Logincontroller;
use App\Http\Controllers\Auth\Logoutcontroller;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\Postlikecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/dashboard', [Dashboardcontroller::class, 'index'])->name('dashboard');
Route::get('/logout', [Logoutcontroller::class, 'store'])->name('logout');

Route::get('/register', [Registercontroller::class, 'index'])->name('register');
Route::Post('/register', [Registercontroller::class, 'store']);

Route::get('/login', [Logincontroller::class, 'index'])->name('login');
Route::Post('/login', [Logincontroller::class, 'store']);

Route::get('/posts', [Postcontroller::class, 'index'])->name('posts');
Route::Post('/posts', [Postcontroller::class, 'store']);

Route::post('/posts/{post}/likes', [Postlikecontroller::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [Postlikecontroller::class, 'destroy'])->name('posts.likes');

// Route::get('/posts', function () {
//     return view('posts/index');
// })->name('posts');
