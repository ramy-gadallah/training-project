<?php

use App\Http\Controllers\Front\NameController;
use App\Http\Controllers\FuckController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/admin', function () {
    return 'welcome page ';
});

Route::namespace('Front')->group(function () {
    Route::get('/function1', [NameController::class, 'namespace1']);
    Route::get('/function2', [NameController::class, 'namespace2']);
    Route::get('/function3', [NameController::class, 'namespace3']);
    Route::get('/function4', [FuckController::class, 'IdParameter']);
});
