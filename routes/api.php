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

Route::post('/task/create', 'PostsController@submit');
Route::get('/task/{tech_idd}', 'getController@getList');
Route::get('task/desc/{tech_id}/{task_idd}','getController@taskDesc');
Route::put('/update/{task_idd}', 'putController@updateStatus');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
