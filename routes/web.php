<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//affiche la home page du site
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

//form download brochure
Route::post('/download/brochure', [\App\Http\Controllers\HomeController::class, 'downloadBrochure'])->name('download.brochure');

//affiche la vue détaillée d'un appartement
Route::get('/property/{property}/{slug}', [\App\Http\Controllers\PropertyController::class, 'show'])->name('property.show');

//gère le formulaire de contact
Route::post('send/request', [\App\Http\Controllers\HomeController::class, 'sendRequest'])->name('send.request');

//route vers brochure digitale
Route::get('digital/brochure', [\App\Http\Controllers\HomeController::class, 'digitalBrochure'])->name('digital.brochure');


//routes protegées par mot de passe
Route::middleware(['auth', 'verified'])->group(function () {
    //import excel
    Route::get('/import', [\App\Http\Controllers\PropertyImportController::class, 'index'])->name('import.index');
    Route::post('/import', [\App\Http\Controllers\PropertyImportController::class, 'import'])->name('import.request');

//upload image plan
    Route::post('/add/plan', [\App\Http\Controllers\PropertyImportController::class, 'addPlan'])->name('add.plan');

//page liste contact
    Route::get('/contacts', [\App\Http\Controllers\PropertyImportController::class, 'contacts'])->name('contacts.index');

    Route::get('contact/export/', [\App\Http\Controllers\PropertyImportController::class, 'export'])->name('export.contacts');

    Route::get('import/property/{property}/edit', [\App\Http\Controllers\PropertyController::class, 'edit'])->name('property.edit');
    Route::post('import/property/{property}', [\App\Http\Controllers\PropertyController::class, 'update'])->name('property.update');
    Route::post('import/image/{picture}', [\App\Http\Controllers\PropertyController::class, 'updateImage'])->name('property.update.image');
    Route::post('import/images/{property}/bulk', [\App\Http\Controllers\PropertyController::class, 'updateBulkImage'])->name('property.update.image.bulk');

})->name('dashboard');

require __DIR__.'/auth.php';
