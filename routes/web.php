<?php

use App\Http\Controllers\KunjunganControllerr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::get('/index',[KunjunganControllerr::class, 'index']);
route::post('/index',[KunjunganControllerr::class, 'index']);
route::get('/index',[KunjunganControllerr::class, 'index']);
