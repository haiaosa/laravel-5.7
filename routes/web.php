<?php

use App\Stories;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('/story/index');
});

Route::get('/home','StoriesController@index');

Route::get('/home/create','StoriesController@create');

Route::get('/home/{id}','StoriesController@show');

Route::post('/home','StoriesController@store');



