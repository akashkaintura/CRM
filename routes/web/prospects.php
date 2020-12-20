<?php

use App\Http\Controllers\Admin\Prospects\ProspectsController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ProspectsController::class, 'index'])->name('dashboard');
Route::get('create', [ProspectsController::class, 'create'])->name('create');
Route::get('{prospect}/edit', [ProspectsController::class, 'edit'])->where('prospect', '[0-9]+')->name('edit');
// Showing the Prospects Profile
Route::get('{prospect}', [ProspectsController::class], 'show')->where('prospect', '[0-9]+')->name('show');

// Storing the Prospects
Route::post('/', [ProspectsController::class, 'store'])->name('store');

// Update the Profile Image
Route::put('{prospect}', [ProspectsController::class, 'update'])->where('prospect', '[0-9]+')->name('update');
