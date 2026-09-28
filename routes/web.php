<?php

use Illuminate\Support\Facades\Route;

// Array con i dati degli articoli
$articles = [
    1 => [
        'title' => 'Come creare un Blog in Laravel',
        'category' => 'Programmazione',
        'content' => 'In questo articolo vediamo come gestire le rotte parametriche in Laravel passo dopo passo.'
    ],
    2 => [
        'title' => 'Guida alle Named Routes',
        'category' => 'Laravel',
        'content' => 'Le rotte con nome permettono di generare URL in modo semplice e pulito all\'interno delle viste Blade.'
    ],
    3 => [
        'title' => 'Lavorare con gli Array di Dati',
        'category' => 'PHP',
        'content' => 'Prima di usare i database, possiamo simulare una fonte dati utilizzando un semplice array PHP.'
    ],
];

// 1. Homepage
Route::get('/', function () {
    return view('welcome');
})->name('homepage');

// 2. Chi Siamo
Route::get('/chi-siamo', function () {
    return view('chi-siamo');
})->name('about');

// 3. Servizi
Route::get('/servizi', function () {
    return view('contatti'); // o la vista che usi per i servizi
})->name('services');

// 4. Elenco Articoli del Blog
Route::get('/blog', function () use ($articles) {
    return view('articles.index', ['articles' => $articles]);
})->name('articles.index');

// 5. ROTTA PARAMETRICA (Dettaglio Articolo)
Route::get('/blog/dettaglio/{id}', function ($id) use ($articles) {
    if (!array_key_exists($id, $articles)) {
        abort(404);
    }

    return view('articles.show', ['article' => $articles[$id]]);
})->name('articles.show');