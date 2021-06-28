<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testdata;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

//Routing Admin
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name(
    'register'
);
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [AdminController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/admin/form', function () {
        return view('admin.general');
    });
});

//Routing PONDOK

Route::get('/pondok', function () {
    return view('client.pondok');
});
Route::get('/testdata', [testdata::class, 'show']);

Route::get('/', function () {
    return view('client.home');
});
Route::get('/pondok', function () {
    return view('client.pondok');
});
