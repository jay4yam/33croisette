<?php

use Illuminate\Support\Facades\Route;

//affiche la home page du site
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', [\App\Http\Controllers\HomeController::class, 'test'])->name('test');

//gère le formulaire de contact
Route::post('send/request', [\App\Http\Controllers\HomeController::class, 'sendRequest'])->name('send.request');

