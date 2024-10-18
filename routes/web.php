<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PruebaController ;

Route::get('/', [HomeController::class, 'index']);

Route::get('/ryan', [PruebaController ::class, 'pruebaVista']);


Route::get('/ryan/save', [PruebaController ::class, 'prueba']);
