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
    // operator get all records
    Route::get('/entity/records', [EntityRecordsController::class, 'getAllRecords']);
    //operator creates records for entities with custom attributes
    Route::post('/entity/records', [EntityRecordsController::class, 'createEntityRecord']);
    //Operator get specific entity’s record along with the custom attributes values 
    Route::get('/entity/records/{entity_id}', [EntityRecordsController::class, 'getAllRecordsByEntity']);

    
    Route::post('operator/logout', [OperatorAuthController::class, 'logout']);

});


