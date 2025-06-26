<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SportController;

Route::controller(AuthController::class)->group(function () {
  Route::post('login', 'login');
  Route::post('register', 'register');
});

Route::middleware('auth:sanctum')->group(function () {
  Route::get('user', fn() => Auth::user());
  Route::resource('sports', SportController::class)->only('index', 'show');

  Route::controller(AuthController::class)->group(function () {
    Route::post('logout', 'logout');
  });
});
