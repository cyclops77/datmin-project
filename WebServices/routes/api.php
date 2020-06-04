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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('loginApi', 'PassportController@login');

Route::post('registerApi', 'PassportController@register');

Route::post('/logout1','PassportController@logout');

Route::middleware('auth:api')->group(function () {

    Route::get('/imunisasi/index', 'ImunisasiController@index');

	Route::get('/kehamilan/index', 'KehamilanController@index');

    Route::post('/kehamilan/delete', 'KehamilanController@destroy');

    Route::post('/kehamilan/update', 'KehamilanController@update');

    Route::get('user', 'PassportController@details');

    Route::resource('products', 'ProductController');

    Route::get('/products','ProductController@index');

    Route::get('/activity/index','ActivityController@index');

    Route::get('/activity/{id}','ActivityController@show');

    Route::post('/activity/store','ActivityController@store');

    Route::post('/imunisasi/update', 'ImunisasiController@update');

    Route::post('/kehamilan/store','KehamilanController@store');

    Route::post('/imunisasi/store','ImunisasiController@store');

    Route::post('/change-password-api','PassportController@changePass');

	Route::post('/change-data-api','PassportController@changeData');
	
});
