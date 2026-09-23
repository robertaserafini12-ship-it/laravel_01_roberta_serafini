<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
});

Route::get('/contatti', function () {
    return view('contatti');
});