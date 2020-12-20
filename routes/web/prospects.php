<?php

use App\Http\Controllers\Admin\Prospects\ProspectsController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ProspectsController::class, 'index'])->name('dashboard');
Route::get('create', [ProspectsController::class, 'create'])->name('create');
Route::get('{prospect}/edit', [ProspectsController::class, 'edit'])->name('edit');

Route::get('{prospect}/show' [ProspectsController::class], 'show')->name('show');

Route::post('/', [ProspectsController::class, 'store'])->name('store');
