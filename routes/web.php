<?php

use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('website.blog.index');
})->name('home');

Route::get('/single', function () {
    return view('website.blog.single');
})->name('blog.single');

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])
    ->name('admin.dashboard')->middleware('auth');

Auth::routes();

Route::resource('auth/post', PostController::class);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');