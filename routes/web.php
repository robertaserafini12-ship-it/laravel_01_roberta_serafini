<?php

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('welcome');
});

// Pagina 1 (o chi-siamo)
Route::get('/pagina1', function () {
    return view('pagina1'); // Se stai usando chi-siamo, scrivi view('chi-siamo');
});

// Pagina 2 (o contatti)
Route::get('/pagina2', function () {
    return view('pagina2'); // Se stai usando contatti, scrivi view('contatti');
});