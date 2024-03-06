<?php

use App\Http\Controllers\PostController;
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
    return view('welcome');
});

Route::controller(PostController::class)->name('post.')->group(function () {

    Route::get('posts', 'index')->name('index');
    Route::get('posts/create', 'create')->name('create');
    Route::post('post/store', 'store')->name('store');
    Route::get('post/show/{id}', 'show')->name('show');
    Route::get('post/edit/{id}', 'edit')->name('edit');
    Route::put('post/update/{id}', 'update')->name('update');
    Route::delete('post/delete/{id}', 'destroy')->name('destroy');
});

Route::get('home', function () {
    return view('home');
});
Route::get('header', function () {
    return view('header');
});
Route::get('singup', function () {
    return view('singup');
});
Route::get('login', function () {
    return view('login');
});
Route::get('footer', function () {
    return view('footer');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('checkout', function () {
    return view('checkout');
});
Route::get('hoteldetails', function () {
    return view('hoteldetails');
});
Route::get('hotellist', function () {
    return view('hotellist');
});
