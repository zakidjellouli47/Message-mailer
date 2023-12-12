<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('contact_us', 'ContactusController@index');

//Route::post('contact_us/submit', 'ContactusController@submit');


Route::controller(App\Http\Controllers\ContactusController::class)->group(function(){
    Route::get('/','index');
    Route::post('/contact_us/submit','submit');
    
    });
    