<?php

Route::get('/', 'HomeController@show');
Route::get('examples/{lesson}/{exhibit}', 'ExamplesController@show');
Route::get('{slug}', 'PostsController@show');
