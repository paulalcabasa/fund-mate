<?php

use App\Http\Controllers\BorrowersController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('borrowers', [BorrowersController::class, 'list'])
        ->name('borrowers.list');
});
