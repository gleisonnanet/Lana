<?php


Route::group(['namespace' => 'gframework\lchatbot\Controllers', 'middleware' => 'web'], function () {

	Route::get(env('chatbotUrl', 'chatbot'), 'ChatBotController@index');

	Route::get(env('chatbotApiUrl', 'chatbot/api'), 'ChatBotController@api');

});


