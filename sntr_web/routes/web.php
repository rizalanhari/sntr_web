<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testdata;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PondokController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\SantriController;


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

    //pondok routing
    Route::get('formtambahpondok', [PondokController::class, 'callform'])->name(
        'admin.form.tambah.pondok'
    );
    Route::post('storepondok', [PondokController::class, 'store'])->name(
        'admin.store.tambah.pondok'
    );

    //pengajar routing
    Route::get('formtambahpengajar', [
        PengajarController::class,
        'callform',
    ])->name('admin.form.tambah.pengajar');
    Route::post('storepengajar', [PengajarController::class, 'store'])->name(
        'admin.store.tambah.pengajar'
    );

    //santri routing
    Route::get('formtambahsantri', [SantriController::class, 'callform'])->name(
        'admin.form.tambah.santri'
    );
    Route::post('storesantri', [SantriController::class, 'store'])->name(
        'admin.store.tambah.santri'
    );
});

Route::get('/datapesantren', function () {
    return view('admin.datapesantren');
});
Route::get('/datapengajar', function () {
    return view('admin.datapengajar');
});
Route::get('/datasantri', function () {
    return view('admin.datasantri');
});




//Routing PONDOK

Route::get('/testdata', [testdata::class, 'show']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/pondok', [PondokController::class, 'index']);
Route::get('/detail/{id}', [PondokController::class, 'detil']);

Route::get('/detail', function () {
    return view('client.detail');
});

Route::get('/detail', function () {
    return view('client.detail');
});
