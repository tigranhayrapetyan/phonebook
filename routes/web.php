<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ContactsUploadController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [UserAuthController::class,'login'])->middleware('alreadyLoggedIn');

Route::get('/registration', [UserAuthController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user', [UserAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [UserAuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [UserAuthController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[UserAuthController::class, 'logout']);

Route::post('/upload-contact', [ContactsUploadController::class, 'uploadContact'])->name('upload-contact');
