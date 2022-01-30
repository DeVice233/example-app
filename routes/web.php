<?php

use Illuminate\Support\Facades\Route;

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



Route::middleware(['guest:web'])->group(function () {
    Route::get('/signIn',[\App\Http\Controllers\AuthController::class,'showSignInForm'])->name('signIn');
    Route::post('/signIn_process', [\App\Http\Controllers\AuthController::class, 'signIn'])->name('signIn_process');

    Route::get('/signUp', [\App\Http\Controllers\AuthController::class, 'showSignUpForm'])->name('signUp');
    Route::post('/signUp_process', [\App\Http\Controllers\AuthController::class, 'signUp'])->name('signUp_process');
});

Route::middleware(['auth:web'])->group(function () {

    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});

Route::resource('/res',\App\Http\Controllers\PostController::class );

Route::get('/',[\App\Http\Controllers\IndexController::class,'home'])->name('home');

Route::get('/posts',[\App\Http\Controllers\IndexController::class,'index'])->name('posts');
Route::get('/post/{id}',[\App\Http\Controllers\IndexController::class,'singlePost'])->name('post');

Route::post('/mailSend', [\App\Http\Controllers\IndexController::class, 'mailSend'])->name('mailSend');
Route::get('/contactForm',[\App\Http\Controllers\IndexController::class,'contactForm'])->name('contactForm');

Route::post('comments', [\App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
