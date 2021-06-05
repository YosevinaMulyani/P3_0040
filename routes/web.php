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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pasien', [usercontroller::class,'index']);
Route::get('/pasien/tambah', [usercontroller::class,'tambah']);
Route::get('/pasien/hapus/{id}', [usercontroller::class,'hapus']);
Route::post('/pasien/store',[usercontroller::class,'store']);
Route::get('/pasien/edit/{id}',[usercontroller::class,'edit']);
Route::post('/pasien/update',[usercontroller::class,'update']);
Route::get('/pasien/cari',[usercontroller::class,'cari']);

