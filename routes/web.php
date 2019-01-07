<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('/story/index');
});

Route::get('/stories','StoryController@index');

Route::get('/stories/create','StoryController@create');

Route::get('/stories/{story}','StoryController@show');

Route::post('/stories','StoryController@store');



