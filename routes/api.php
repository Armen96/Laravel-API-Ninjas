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

Route::post('/register', 'AuthController@register');

Route::post('/login', 'AuthController@login');
Route::post('/me', 'AuthController@me');

Route::post('/logout', 'AuthController@logout');

Route::post('/clans', 'ClanController@index');
Route::post('/clans/{id}', 'ClanController@clansMembers');

