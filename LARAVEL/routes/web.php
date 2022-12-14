<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\API\PostApiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/

Route::get('/', [PagesController::class, 'homepage'])->name('home');
Route::fallback([PagesController::class, 'error404'])->name('error404');

Route::controller(PagesController::class)
->name('pages.')
->prefix('pages')
->group(function(){
    Route::get('/about-us', 'about')->name('about');
    Route::get('/greetings', 'index')->name('greet'); 
});


#-------------- Product routes ---------------------#
Route::controller(ProductsController::class)
->name('product.')
->prefix('products')
->group(function(){
    Route::get('/', 'index')->name('list'); 
    Route::get('/details/{id}', 'show')->name('details');

    Route::middleware('auth:customer')
    ->group(function(){
        Route::get('/add', 'create')->name('add');
        Route::post('/save', 'store')->name('save');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });
});

#-------------- Customer routes ---------------------#
Route::controller(CustomerController::class)
->name('customer.')
->prefix('customers')
->group(function(){
    Route::get('/add', 'create')->name('form'); 
    Route::post('/save', 'store')->name('save');
    Route::get('/login', 'loginForm')->name('login');
    Route::post('/validate', 'loginValidate')->name('validate');
    
    Route::middleware('auth:customer')
    ->group(function(){
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/logout', 'logout')->name('logout');
    });
});

Route::controller(PostApiController::class)->group(function(){
    Route::get('/posts', 'index');
});



//Route::method('url', action)->name();

/**
 * get - fetch data
 * post - create or save
 * put - update all
 * patch - update few or all
 * delete - delete
 */

