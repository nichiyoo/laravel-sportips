<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))->name('welcome');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/sports', fn() => view('sports'))->name('sports');

Route::middleware('auth')->group(function () {
  Route::get('/dashboard', fn() => redirect()->route('admin.dashboard'))->name('dashboard');
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')
  ->as('admin.')
  ->prefix('admin')
  ->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('sports', SportController::class);
    Route::resource('sports.clubs', ClubController::class)->shallow();
    Route::resource('sports.contents', ContentController::class)->shallow();
    Route::resource('sports.comments', CommentController::class)->shallow();
  });

require __DIR__ . '/auth.php';
