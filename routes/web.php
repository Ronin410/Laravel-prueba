<?php

use Illuminate\Support\Facades\Route;

Route::get('/si', function () {
    return view('welcome');
});

Route::get('/w', function () {
    return "wdwq";
});
