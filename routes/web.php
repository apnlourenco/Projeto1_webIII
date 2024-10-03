<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

Route::get('/', function () {
    return view('home');
});

Route::get('/faleconosco', function () {
    return view('faleconosco');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('teste', [TesteController::class, 'testar']);

