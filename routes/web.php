<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::view('/', 'startpage')->name('startpage');
Route::view('/info', 'info')->name('info');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('posts', PostController::class);

Route::get('/comments/create/{post}', [CommentController::class, 'create'])->name('comments.create');
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
