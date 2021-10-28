<?php

use App\Http\Controllers\Admin\Prospects\ExcelController;
use App\Http\Controllers\Admin\Prospects\SearchController;
use App\Http\Controllers\Admin\Prospects\ProspectsController;



//prefix: prospects

Route::get('/', [ProspectsController::class, 'index'])->name('dashboard');
Route::get('create', [ProspectsController::class, 'create'])->name('create');
Route::post('/', [ProspectsController::class, 'store'])->name('store');
//Route::resource('line', [CertainController::class]);



Route::get('/fileinte', [ExcelController::class, 'fileinte'])->name('import');

Route::post('/upload', [ExcelController::class, 'loadfile'])->name('import.excel');

Route::get('/prosearch', [SearchController::class, 'index'])->name('regmat');

Route::get('/prosent', [SearchController::class, 'prosen'])->name('prosen');