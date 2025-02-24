<?php

use Illuminate\Support\Facades\Route;
use Modules\Entity\Http\Controllers\EntityController;

/*
 *--------------------------------------------------------------------------
 * API Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 *
*/

    Route::get('/entities', [EntityController::class, 'getAllEntities']);  
    Route::get('/entities/{id}', [EntityController::class, 'show']); 
    Route::post('/entities', [EntityController::class, 'store']);  
    Route::put('/entities/{id}', [EntityController::class, 'update']);  
    Route::delete('/entities/{id}', [EntityController::class, 'destroy']); 
