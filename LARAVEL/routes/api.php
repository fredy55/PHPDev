<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductApiController;

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
    
});

