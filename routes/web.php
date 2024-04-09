<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/tambah-data', function () {
    return view('form-add');
});

Route::get('/informasi', function () {
    return view('informasi');
});