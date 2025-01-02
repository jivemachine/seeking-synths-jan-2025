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

// Sitemape-images.xml page
Route::get('/sitemap-images.xml', function () {
    return response()->view('sitemap-images')->header('Content-Type', 'application/xml');
});

// Sitemap HTML page
Route::get('/sitemap.html', function () {
    // consider fetching pages from DB or a config
    $pages = [
        (object)['slug' => '/', 'title' => 'Home'],
    ];

    return view('sitemap-html', ['pages' => $pages]);
});
