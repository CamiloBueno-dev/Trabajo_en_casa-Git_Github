<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('presentacion');
})->name('presentacion');

Route::get('/niñez', function () {
    return view('niñez');
})->name('niñez');

Route::get('/adolescencia', function () {
    return view('adolescencia');
})->name('adolescencia');

