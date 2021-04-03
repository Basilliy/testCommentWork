<?php

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

    use Illuminate\Support\Facades\Route;;

    Route::group(['prefix' => 'v1', 'middleware' => ['api']], function () {

    // Events
    Route::group(['prefix' => 'events'], function () {
        Route::get('', 'EventsController@getAll');
        Route::get('{event}', 'EventsController@getEvent');
    });

    Route::group(['prefix' => 'comments'], function () {
        Route::get('', 'CommentsController@getAll');
        Route::get('{comment}', 'CommentsController@getComment');
        Route::post('add', 'CommentsController@addComment');
        Route::delete('{comment}/delete', 'CommentsController@deleteComment');
        Route::post('update', 'CommentsController@updateComment');
    });

});
