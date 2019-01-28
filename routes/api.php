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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*Route::get('/articles','articleController@index');
Route::get('/article/{id}','articleController@show');
Route::post('/create/article','articleController@create');
Route::put('/update/article','articleController@update');
Route::delete('/delete/article/{id}','articleController@delete');

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');*/


Route::get('/', 'talkController@index1');
Route::get('/addatt', 'talkController@attdeeIndex1');
Route::post('/addtalk', 'talkController@addtalk');
Route::post('/addAttendee', 'talkController@addAttendee');
Route::post('/assignAttendee', 'talkController@assignAttendee');
Route::get('/getTalks', 'talkController@getTalks1');
Route::post('/delete/{id}', 'talkController@removeTalk');