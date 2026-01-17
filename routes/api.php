<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(function () {

    // Individual Endpoints
    Route::get('/projects', [ContentController::class, 'projects']);
    Route::get('/faqs', [ContentController::class, 'faqs']);
    Route::get('/clients', [ContentController::class, 'clients']);
    Route::get('/teams', [ContentController::class, 'team']);
    Route::get('/testimonials', [ContentController::class, 'testimonials']);
});
