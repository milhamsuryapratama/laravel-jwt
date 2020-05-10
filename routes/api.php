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

Route::post('register', 'Auth\LoginController@register');
Route::post('login', 'Auth\LoginController@login');
Route::get('data', 'DataController@index');

Route::get('dataall', 'DataController@dataAuth')->middleware('jwt.verify');
Route::get('user', 'DataController@getAuthenticatedUser')->middleware('jwt.verify');
Route::get('logout', 'Auth\LoginController@logout');
