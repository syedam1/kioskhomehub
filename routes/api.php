<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('kiosklist', 'Api\KioskController@kiosklist');

Route::get('/getuser/{id}', 'Api\KioskController@getuser');

Route::get('/verify/{email}/{password}', 'Api\KioskController@verify');

Route::get('/adduser/{email}/{password}', 'Api\KioskController@adduser');

Route::get('/deleteuser/{id}', 'Api\KioskController@deleteuser');




