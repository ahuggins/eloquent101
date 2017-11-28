<?php

Route::get('/', 'HomeController@show');
Route::get('lesson/{lesson}/{exhibit}', 'LessonController@show');
Route::get('{slug}', 'PostsController@show');
