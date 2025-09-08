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

Route::get('/actualidad', function () {
    return view('actualidad');
})->name('actualidad');

Route::get('/futuro', function () {
    return view('futuro');
})->name('futuro');

Route::get('/experiencia-laboral', function () {
    return view('experiencia-laboral');
})->name('experiencia-laboral');

Route::get('/habilidades', function () {
    return view('habilidades');
})->name('habilidades');
