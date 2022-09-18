<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListPesananController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekuserlogin:1']], function () {
        Route::resource('admin', AdminController::class);
        // Route::resource('pesanan', ListPesananController::class);
        Route::resource('admin', ListPesananController::class);
    });
});
Route::controller(PemesananController::class)->group(function () {
    Route::post('simpan', 'save');
    Route::get('/', 'index');
});


route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
});

Route::get('file-export', [ListPesananController::class, 'fileExport'])->name('file-export');

// Route::get('admin', function () {
//     return view('admin.index');
// });
// Route::get('pesanan', function () {
//     return view('admin/pesanan');
// });
// Route::resource('pesanan', ListPesananController::class);
// Route::get('pesanan/json', 'ListPesananController@json');




// Route::group(['middleware' => ['auth']], function () {
//     Route::group(['middleware' => ['cekuserlogin:1']], function () {
//         Route::resource('admin/pesanan', ListPesananController::class);
//     });
// });
