<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HowToConnectController;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('home');
});
Route::get('/register', [RegisterController::class, 'registro']);
Route::post('/register', [RegisterController::class, 'resultregister']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/howtoconnect', [HowToConnectController::class, 'index']);

