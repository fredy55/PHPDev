<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductApiController;
use App\Http\Controllers\API\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|*/

Route::group(['prefix' => 'v1'], function(){
    Route::controller(ProductApiController::class)->group(function(){
        Route::get('/products', 'list');
        Route::get('/products/{id}', 'details');
        Route::post('/products', 'saveProduct');
        Route::put('/product/{id}', 'updateProduct');
        Route::delete('/product/{id}', 'deleteProduct');
    });

    //API routes
    Route::group([
        'middleware' => 'api',
        'prefix' => 'auth'
    ], function () {
        Route::controller(AuthController::class)->group(function(){
            Route::post('/login', 'login');
            // Route::post('logout', 'logout');
            // Route::post('refresh', 'refresh');
            // Route::post('me', 'me');
        });
    });
    
});

