<?php

use App\Http\Controllers\Admin\DepartementController;
use App\Http\Controllers\Admin\EquipeController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\PersonelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('equipe.test');
});

/* Route::get('/index', function () {
    return view('equipe.index');
})->name(); */
Route::prefix('Equipe')->name('equipe.')->group(function () {
    Route::resource('equipe', EquipeController::class);
});

Route::prefix('Personel')->name('personel.')->group(function () {
    Route::resource('personel', PersonelController::class);
});

Route::prefix('Departement')->name('departement.')->group(function () {
    Route::resource('departement', DepartementController::class);
});


Route::prefix('Information')->name('information.')->group(function () {
    Route::resource('information', InformationController::class);
});
