<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'homepage'])->name('home');
Route::fallback([PagesController::class, 'error404'])->name('error404');

Route::controller(PagesController::class)
->name('pages.')
->prefix('pages')
->group(function(){
    Route::get('/about-us', 'about')->name('about');
    Route::get('/greetings', 'index')->name('greet'); 
});



//Route::method('url', action)->name();

/**
 * get - fetch data
 * post - create or save
 * put - update all
 * patch - update few or all
 * delete - delete
 */

