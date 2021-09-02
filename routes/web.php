<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kilariwow', function () {
    return view('home');
});
Route::get('/kilariwow/register', [RegisterController::class, 'registro']);
Route::post('/kilariwow/resultregister', [RegisterController::class, 'resultregister']);
Route::get('/kilariwow/login', [LoginController::class, 'index']);
