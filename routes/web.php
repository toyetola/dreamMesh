<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'talkController@index');
Route::get('/addatt', 'talkController@attdeeIndex');
Route::post('/addtalk', 'talkController@addtalk');
Route::post('/addAttendee', 'talkController@addAttendee');
Route::post('/assignAttendee', 'talkController@assignAttendee');
Route::get('/getTalks', 'talkController@getTalks');
Route::post('/delete/{id}', 'talkController@removeTalk');
