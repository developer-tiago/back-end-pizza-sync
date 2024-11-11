<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EnvironmentController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('categories')->controller(CategoryController::class)->group(function () {
    Route::get('/', 'paginate');
    Route::get('/all', 'index');
    Route::post('/', 'store');
    Route::delete('/{id}', 'destroy');
});

Route::prefix('environments')->controller(EnvironmentController::class)->group(function () {
    Route::get('/', 'paginate');
    Route::get('/all', 'index');
    Route::post('/', 'store');
    Route::delete('/{id}', 'destroy');
});

Route::prefix('products')->controller(ProductController::class)->group(function () {
    Route::get('/', 'paginate');
    Route::post('/', 'store');
    Route::delete('/{id}', 'destroy');
});
