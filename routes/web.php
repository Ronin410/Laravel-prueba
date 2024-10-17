<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/ryan', function () {
    return "wdwq";
});


Route::get('/ryan/{post}', function ($post) {
    return "wdwq {$post}";
});
