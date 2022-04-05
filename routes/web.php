<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
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
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::group(['middleware'=>['auth', 'ValidateRole:1']], function(){
    route::get('/pelanggan', function () {
        return view('pelanggan');
    });
});
Route::group(['middleware'=>['auth', 'ValidateRole:2']], function(){
    route::get('/admin', function () {
        return view('admin');
    });
});
Route::group(['middleware'=>['auth', 'ValidateRole:3']], function(){
    route::get('/mitra', function () {
        return view('mitra');
    });
});
