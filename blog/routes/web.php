<?php

use App\Http\Controllers\GreetingController;
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
Route::get('/greeting', function () {
    return view('/greeting');
});

Route::get('/user/{Id?}/{Name?}', function ($userId = null, $userName = null) {
    #return 'Your Id is:' . $userId . 'Your Name is:' . $userName;
    return view('user.index', [
        'id' => $userId,
        'name' => $userName,
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/greeting/{title}', [GreetingController::class, 'showMessage']);
