<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/profil', function () {
    return view('profil.show');
});
Route::get('/profil/images', function () {
    return view('image.index');
});
