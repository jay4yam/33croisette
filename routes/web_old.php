<?php

use Illuminate\Support\Facades\Route;

//affiche la home page du site
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/download/brochure', [\App\Http\Controllers\HomeController::class, 'downloadBrochure'])->name('download.brochure');

//import excel
Route::get('/import', [\App\Http\Controllers\PropertyImportController::class, 'index'])->name('import.index');
Route::post('/import', [\App\Http\Controllers\PropertyImportController::class, 'import'])->name('import.request');

//upload image plan
Route::post('/add/plan', [\App\Http\Controllers\PropertyImportController::class, 'addPlan'])->name('add.plan');

//page liste contact
Route::get('/contacts', [\App\Http\Controllers\PropertyImportController::class, 'contacts'])->name('contacts.index');

//affiche la vue détaillée d'un appartement
Route::get('/property/{property}/{slug}', [\App\Http\Controllers\PropertyController::class, 'show'])->name('property.show');

//gère le formulaire de contact
Route::post('send/request', [\App\Http\Controllers\HomeController::class, 'sendRequest'])->name('send.request');


