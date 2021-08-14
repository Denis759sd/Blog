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

Auth::routes();

Route::get('/', function () {
    return view('home', ['color_home' => 'text-secondary']);
});

/*
 * PostController
*/
Route::get('/posts', 'App\Http\Controllers\PostController@show')->name('show-posts');
Route::match(['get', 'post'],'/new-post', 'App\Http\Controllers\PostController@create')->name('new-post')->middleware('auth');

/*
 * HomeController
*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
 * UserController
*/
Route::get('/profile', [App\Http\Controllers\UserController::class, 'show'])->name('profile');
