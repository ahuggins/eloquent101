<?php

Route::get('/', 'HomeController@show');
Route::get('{slug}', 'PostsController@show');
