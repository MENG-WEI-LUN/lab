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
Route::auth();
Route::get('auth/login',['as' => 'google.auth', 'uses' => 'GoogleController@redirectToGoogle']);
Route::get('auth/callback', 'GoogleController@handleGoogleCallback');

Route::group(['middleware' =>'auth'],function(){

    Route::get('/',['as' => 'home', function () {
        return view('pages.index',['mainTitle' => '']);
    }]);

    Route::group(['prefix' => 'apply'],function(){
        Route::get('/',['as' => 'apply',  'uses' => 'EventRegistsController@index']);
        Route::post('/store',['as' => 'apply.store','uses' => 'EventRegistsController@store']);
        Route::patch('/{id?}',['as' => 'apply.update','uses' => 'EventRegistsController@update']);
        Route::delete('/delete/{id?}',['as' => 'apply.delete','uses' => 'EventRegistsController@destroy']);
    });
    
    Route::group(['prefix' => 'manager'],function(){    
        Route::get('/',['as' => 'manager', 'uses' => 'MembersController@index']);
        Route::post('/store',['as' => 'manager.store','uses' => 'MembersController@store']);
        Route::patch('/{id?}',['as' => 'manager.update','uses' => 'MembersController@update']);
        Route::delete('maager/delete/{id?}',['as' => 'manager.delete','uses' => 'MembersController@destroy']); 
    });

    Route::group(['prefix' => 'log'],function(){
        Route::get('/',['as' => 'log', 'uses' => 'LogsController@index']);
        Route::post('logout',['as' => 'log.out', 'uses' => 'LogsController@update']);
    });

});

