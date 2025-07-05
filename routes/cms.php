<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\CMS\ServiceController;

Route::middleware(['web'])
    ->group(function () {
        Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
        // Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
        // Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
        // Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
        // Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
        // Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');
    });

