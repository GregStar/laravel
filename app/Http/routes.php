<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

    Route::get('/', 'HomeController@index' );
    Route::get('home', 'HomeController@index' );
    Route::get('about', 'AboutController@index' );
    Route::get('cellar', 'CellarController@index' );
    Route::get('contact', 'ContactController@index' );
    Route::get('kitchen', 'KitchenController@index' );
    Route::get('reservation', 'ReservationController@index' );
    Route::get('reservation/table', 'ReservationController@table' );
    Route::get('reservation/confirm', 'ReservationController@confirm' );

    Route::post('reservation', 'ReservationController@storeSession');
    Route::post('reservation/table', 'ReservationController@storeSessionTable');
    Route::post('reservation/confirm', 'ReservationController@storeSessionConfirm');



