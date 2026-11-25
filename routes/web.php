<?php

use App\Http\Controllers\KunjunganControllerr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 route::get('/index',[KunjunganControllerr::class, 'index']);
 route::get('/kunjungan',[KunjunganControllerr::class, 'index']);
 route::get('/kunjungan/tambah',[KunjunganControllerr::class, 'tambah                      ']);
 route::post('/index',[KunjunganControllerr::class, 'index']);
