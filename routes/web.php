<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'Show'])->name('Admin.index');
    Route::get('/edit/{id}', [AdminController::class, 'Edit'])->name('Puppy.edit');
    Route::post('/edit/{id}', [AdminController::class, 'Update'])->name('Puppy.update');
    Route::get('/delete/{id}',[AdminController::class,'confirm'])->name('Puppy.confirm');
    Route::post('/delete/{id}',[AdminController::class,'Delete'])->name('Puppy.delete');
});

