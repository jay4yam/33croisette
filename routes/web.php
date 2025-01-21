<?php

use Illuminate\Support\Facades\Route;

//affiche la home page du site
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

//import excel
Route::get('/import', [\App\Http\Controllers\PropertyImportController::class, 'index'])->name('import.index');
Route::post('/import', [\App\Http\Controllers\PropertyImportController::class, 'import'])->name('import.request');

Route::get('/property/{property}', [\App\Http\Controllers\PropertyController::class, 'show'])->name('property.show');

//gère le formulaire de contact
Route::post('send/request', [\App\Http\Controllers\HomeController::class, 'sendRequest'])->name('send.request');

