<?php

use App\Http\Controllers\Admin\Prospects\ProspectsContactController;
use App\Http\Controllers\Admin\Prospects\ProspectsController;
use App\Models\Prospect;
use Illuminate\Support\Facades\Route;



Route::get('/', [ProspectsController::class, 'index'])->name('dashboard');
Route::get('create', [ProspectsController::class, 'create'])->name('create');
Route::get('{prospect}/edit', [ProspectsController::class, 'edit'])->where('prospect', '[0-9]+')->name('edit');
// Showing the Prospects Profile
Route::get('{prospect}', [ProspectsController::class], 'show')->where('prospect', '[0-9]+')->name('show');
// Storng the prospects
Route::post('/', [ProspectsController::class, 'store'])->name('store');

Route::put('{prospect}', [ProspectsController::class, 'update'])->where('prospect', '[0-9]+')->name('update');
// profile image
Route::put('{prospect}/profile-image', [ProspectsController::class, 'updateProfileImage'])
                ->where('prospect', '[0-9]+')->name('update.profile-image');

Route::delete('{prospect}', [ProspectsController::class, 'destroy'])
                ->where('prospect', '[0-9]+')->name('delete');

Route::delete('{prospect}/profile-image', [ProspectsController::class, 'destroyProfileImage'])
                ->where('prospect', '[0-9]+')->name('delete.profile-image');

// for the Activities
// Route::prefix('activities')->name('activities.')->group(base_path('routes/web/prospects/activities.php'));



/*
 * Prospect Contact Details
 * Create contact details for Prospect
**/

Route::get('{prospect}/contact/create',
                    [ProspectContactController::class, 'create'])
                     ->where('prospects','[0-9]+')->name('contact.create');
// Store
Route::post('{prospect}/contact', [ProspectsContactController::class, 'store'])
                    ->where('prospect', '[0-9]+')->name('contact.store');

//Update
Route::put('{prospect}/contact', [ProspectContactsController::class, 'update'])
                    ->where('prospect', '[0-9]+')->name('contacts.update');
