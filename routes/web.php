<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('seeking-synths');
});


Route::get('/about-us', function () {
    return view('about-us');
});
