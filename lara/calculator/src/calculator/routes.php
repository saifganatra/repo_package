<?php

Route::get('calculator', function(){
	echo realpath(__FILE__).'<br>Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'Devdojo\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Devdojo\Calculator\CalculatorController@subtract');
Route::get('multi/{a}/{b}', 'Devdojo\Calculator\CalculatorController@multi');