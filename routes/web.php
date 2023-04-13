<?php

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
    return view('startpage');
});
Route::get('/info', function () {
    return view('info');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource("posts", "App\Http\Controllers\PostController");
Route::get("/comments/create/{post_id}", "App\Http\Controllers\CommentController@create");
Route::post('/posts/{post_id}/comments', [\App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');

Route::get("/user/{user_id}", "App\Http\Controllers\UserController@show");
