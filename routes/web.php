<?php

use App\Http\Controllers\Auth\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\WebsiteController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [WebsiteController::class, 'home'])->name('home');

Route::get('/post/{post}',   [WebsiteController::class, 'show'])
    ->name('blog.single');


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
| Admin Routes (Protected)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
        ->name('admin.dashboard');

    Route::resource('/posts', PostController::class);
});
