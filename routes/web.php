<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

// Authentication routes
Auth::routes();

// Home route for authenticated users
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Blog post routes
Route::get('/', [PostController::class, 'index']);  // Home page for blog posts
Route::resource('posts', PostController::class)->middleware('auth');  // CRUD routes for posts
