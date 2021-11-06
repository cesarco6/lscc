<?php

use App\Http\Controllers\Admin\Prospects\ExcelController;
use App\Http\Controllers\Admin\Prospects\SearchController;
use App\Http\Controllers\Admin\Sellers\SellerController;
use App\Http\Controllers\Admin\Prospects\ProspectsController;



//prefix: prospects

Route::get('/inicio', [SellerController::class, 'index'])->name('dashboard');
Route::get('/selcreate', [SellerController::class, 'create']);
Route::get('/seledit/{seller}/edit', [SellerController::class, 'edit']);
Route::post('/selsto', [SellerController::class, 'store']);
Route::get('/selsho/{seller}/show', [SellerController::class, 'show']);
Route::put('/selup/{seller}', [SellerController::class, 'update']);
Route::delete('/seldes/{seller}/destroy', [SellerController::class, 'destroy']);

Route::get('/prostabl', [ProspectsController::class, 'index'])->name('indexpro');
Route::get('/create', [ProspectsController::class, 'create'])->name('create');
Route::get('/{prospect}/edit', [ProspectsController::class, 'edit'])->name('edit');
Route::post('/', [ProspectsController::class, 'store'])->name('store');
Route::get('/{prospect}/show', [ProspectsController::class, 'show'])->name('show');
Route::patch('/{prospect}', [ProspectsController::class, 'update'])->name('update');
Route::delete('/{prospect}/destroy', [ProspectsController::class, 'destroy'])->name('delete');



Route::get('/fileinte', [ExcelController::class, 'fileinte'])->name('import');

Route::post('/upload', [ExcelController::class, 'loadfile'])->name('import.excel');

Route::get('/prosearch', [SearchController::class, 'index'])->name('regmat');

Route::get('/prosent', [SearchController::class, 'prosen'])->name('prosen');