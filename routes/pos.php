<?php

use App\Http\Controllers\POSController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get("pos", [POSController::class, 'index'])->name('pos');


});
