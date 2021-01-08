<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/login', 'Api\AuthController@login');
Route::post('/contact-us', 'Api\ContactController@store');
Route::get('/gallery', 'Api\GalleryController@clientIndex');

Route::group(['prefix' => 'api', 'middleware' => 'auth:api'], function () {

    Route::group(['prefix' => 'contact-us'], function () {
        Route::get('/', 'Api\ContactController@index');
        // Route::get('connect', ['as' => 'connect', 'uses' = > 'AccountController@connect']);
    });

    Route::group(['prefix' => 'gallery'], function () {
        Route::get('/', 'Api\GalleryController@adminIndex');
        Route::post('/', 'Api\GalleryController@store');
        Route::delete('/{id}', 'Api\GalleryController@destroy');
    });

    Route::post('/logout', 'Api\AuthController@logout');
});
