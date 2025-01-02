<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('seeking-synths');
});

// Robots.txt page
Route::get('/robots.txt', function () {
    return response()->view('robots')->header('Content-Type', 'text/plain');
});
