<?php

use App\Http\Controllers\BiodataController;

// Route Publik (Root Path)
fn() => route('welcome'); // opsional
Route::get('/', [BiodataController::class, 'welcome'])->name('welcome');

// Route Admin (Management)
Route::prefix('admin')->group(function () {
    Route::get('/biodata/edit', [BiodataController::class, 'edit'])->name('admin.biodata.edit');
    Route::post('/biodata/update', [BiodataController::class, 'update'])->name('admin.biodata.update');
});