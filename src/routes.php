<?php


Route::group(['namespace' => 'gframework\lana\Controllers', 'middleware' => 'web'], function () {

	Route::get(env('chatbotUrl', 'lana'), 'ChatBotController@index');

	Route::get(env('chatbotApiUrl', 'lana/api'), 'ChatBotController@api');

});



