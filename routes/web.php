<?php

use Illuminate\Support\Facades\Route;

// Array di dati dei tuoi articoli
$articles = [
    1 => [
        'title' => 'Primo Articolo del Blog',
        'category' => 'Tecnologia',
        'content' => 'Questo è il contenuto dettagliato del primo articolo del blog.'
    ],
    2 => [
        'title' => 'Secondo Articolo del Blog',
        'category' => 'Programmazione',
        'content' => 'Questo è il contenuto dettagliato del secondo articolo del blog.'
    ],
    3 => [
        'title' => 'Terzo Articolo del Blog',
        'category' => 'Laravel',
        'content' => 'Questo è il contenuto dettagliato del terzo articolo del blog.'
    ],
];

// Pagina Homepage
Route::get('/', function () {
    return view('welcome');
})->name('homepage');

// Pagina Chi siamo
Route::get('/chi-siamo', function () {
    return view('chi-siamo');
})->name('about');

// Pagina Servizi
Route::get('/servizi', function () {
    return view('servizi');
})->name('services');

// Pagina Elenco Articoli
Route::get('/articoli', function () use ($articles) {
    return view('articles.index', ['articles' => $articles]);
})->name('articles.index');

// ROTTA PARAMETRICA: Pagina Dettaglio Articolo
Route::get('/articolo/dettaglio/{id}', function ($id) use ($articles) {
    if (!array_key_exists($id, $articles)) {
        abort(404);
    }

    $article = $articles[$id];
    return view('articles.show', ['article' => $article]);
})->name('articles.show');