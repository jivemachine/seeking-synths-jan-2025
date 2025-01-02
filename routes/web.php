<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('seeking-synths');
});

// Robots.txt page
Route::get('/robots.txt', function () {
    return response()->view('robots')->header('Content-Type', 'text/plain');
});

// Sitemape.xml page
Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')->header('Content-Type', 'application/xml');
});
