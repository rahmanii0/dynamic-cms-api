<?php

use Illuminate\Support\Facades\Route;
use Modules\Operator\Http\Controllers\OperatorAuthController;
use Modules\EntityRecords\Http\Controllers\EntityRecordsController;

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


Route::post('operator/login', [OperatorAuthController::class, 'login']);

Route::middleware(['auth:operator'])->group(function () {
    
    Route::post('operator/logout', [OperatorAuthController::class, 'logout']);

});


