<?php

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('login',function(){
	return View::make('auth.login');
});
