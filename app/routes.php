<?php

Route::get('/', 'HomeController@index');
Route::get('about', 'HomeController@about');
Route::get('', 'HomeController@about');


Route::controller('manager','ManagerController');
Route::controller('auth','AuthController');

