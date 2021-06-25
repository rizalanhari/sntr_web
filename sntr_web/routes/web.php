<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testdata;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('client.home');
});

Route::get('/pondok', function () {
    return view('client.pondok');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/admin/form', function () {
    return view('admin.general');

Route::get('/admin/form', function () {
    return view('admin.general');
});

  
Route::get('/testdata', [testdata::class, 'show']);
});  

Route::get('/pondok', function () {
    return view('client.pondok');
});
