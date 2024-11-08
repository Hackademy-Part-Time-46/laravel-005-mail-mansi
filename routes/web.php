<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');


Route::post('/invia-form', [ContactController::class, 'invia'])
    ->name('invia');
