<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Controllers\AdminAuthController;


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


Route::middleware(['auth:admin'])->group(function () {


    //API Routes for Admins To Control Operators
    Route::get('/admin/operators', [AdminController::class, 'getAllOperators']);
    Route::get('/admin/operators/{id}', [AdminController::class, 'getOperatorById']);
    Route::post('/admin/operators', [AdminController::class, 'createOperator']);
    Route::put('/admin/operators/{id}', [AdminController::class, 'updateOperator']);
    Route::delete('/admin/operators/{id}', [AdminController::class, 'deleteOperator']);



    //API Routes for Admins To Control Entities
    Route::get('/admin/entities', [AdminController::class, 'getAllEntities']);
    Route::get('/admin/entities/{id}', [AdminController::class, 'getEntityById']);
    Route::post('/admin/entities', [AdminController::class, 'createEntity']);
    Route::put('/admin/entities/{id}', [AdminController::class, 'updateEntity']);
    Route::delete('/admin/entities/{id}', [AdminController::class, 'deleteEntity']);

    //API Routes for Admins To Control Custom Attributes
    Route::get('/admin/custom/attributes', [AdminController::class, 'getAllCustomAttributes']);
    Route::get('/admin/custom/attributes/{id}', [AdminController::class, 'getCustomAtrributeById']);
    Route::post('/admin/custom/attributes', [AdminController::class, 'createCustomAttribute']);
    Route::put('/admin/custom/attributes/{id}', [AdminController::class, 'updateCustomAttribute']);
    Route::delete('/admin/custom/attributes/{id}', [AdminController::class, 'deleteCustomAttribute']);

    //Api Endpoint that make Admin can assign custom attribute to an entity
    Route::post('/admin/assign/custom/attribute', [AdminController::class, 'assignCustomAttributeToEntity']);

    Route::post('/admin/logout', [AdminAuthController::class, 'logout']);

});




Route::post('/admin/register', [AdminAuthController::class, 'registerAdmin']);
Route::post('/admin/login', [AdminAuthController::class, 'loginAdmin']);
