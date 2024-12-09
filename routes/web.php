<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('home/index', function () {
    return view('Home/index');
});

Route::get('mahasiswa', function () {
    $nim = [111,112,123];
    return view('mahasiswa')->with("n",$nim);
});