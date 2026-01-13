<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AnimalCategoriesController;
use App\Http\Controllers\Api\V1\AnimalsController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('V1')->group(function() {
    Route::middleware('auth:sanctum')->group(function() {
        Route::apiResource('animal-categories', AnimalCategoriesController::class);
        Route::apiResource('animals', AnimalsController::class);    
    });
});

require __DIR__.'/auth.php';