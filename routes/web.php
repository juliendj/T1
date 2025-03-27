<?php

use App\Http\Controllers\Admin\DepartementController;
use App\Http\Controllers\Admin\EquipeController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\PersonelController;
use App\Http\Controllers\Admin\InfoprodController;
use App\Http\Controllers\Admin\SearchController;
use App\Http\Controllers\Controller;
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

Route::prefix('Infoprod')->name('infoprod.')->group(function () {
    Route::resource('infoprod', InfoprodController::class);
});
/* Route::prefix('Search')->name('search.')->group(function () {
    Route::resource('search', SearchController::class);
}); */

Route::get('/Home', [HomeController::class, 'index'])->name('home_index');
Route::any('/Search', [SearchController::class, 'index'])->name('search_index');
//Route::post('/Search', [SearchController::class, 'index'])->name('search_indexx');
