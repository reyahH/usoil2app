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
/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});

Route::get('/', 'HomeController@index');

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');

// Registration Routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Password Reset Routes...
Route::get('password/reset', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/home', 'HomeController@index');

Route::resource('corporations', 'CorporationController');

Route::resource('casinos', 'CasinoController');

Route::resource('restaurants', 'RestaurantController');

Route::resource('tests', 'TestController');

//Export
Route::get('get-corporation-export', 'ExcelController@getCorporationExport');
Route::get('get-casino-export', 'ExcelController@getCasinoExport');
Route::get('get-restaurant-export', 'ExcelController@getRestaurantExport');


Route::resource('fryers', 'FryerController');

Route::resource('yellowGreasePickups', 'YellowGreasePickupController');
Route::get('get-autocomplete-corporation-options', 'AutoCompleteController@getCorporationAutoComplete');
Route::get('get-autocomplete-casino-options', 'AutoCompleteController@getCasinoAutoComplete');

Route::resource('fryerTMPSs', 'FryerTMPSController');


// Needs revision
Route::resource('userAccesses', 'UserAccessController');

Route::get('userAccesses/create/{id}', [
			'as' => 'userAccesses.create',
			'uses' => 'UserAccessController@create']);

Route::resource('wpUsers', 'wp_usersController');

