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
Route::get('/users', 'UserController@index');
Route::post('/users/create', 'UserController@store');
Route::put('/users/{id}', 'UserController@update');
Route::delete('/users/{id}', 'UserController@destroy');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/mangas', 'MangaController@index');
Route::post('/mangas/create', 'MangaController@store');
Route::put('/mangas/{id}', 'MangaController@update');
Route::delete('/mangas/{id}', 'MangaController@destroy');
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/chapters', 'ChapterController@index');
Route::post('/chapters/create', 'ChapterController@store');
Route::put('/chapters/{id}', 'ChapterController@update');
Route::delete('/chapters/{id}', 'ChapterController@destroy');
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/{manga}/ch{chapter_id}', 'PageController@index');
Route::post('/{manga}/ch{chapter_id}/create', 'PageController@store');
Route::put('/{manga}/ch{chapter_id}/{id}', 'PageController@update');
Route::delete('/{manga}/ch{chapter_id}/{id}', 'PageController@destroy');
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

