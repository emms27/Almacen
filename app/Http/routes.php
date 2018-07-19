<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('prueba', function(){
// 	 return "Hola, Emms";
// }
// );

// Route::get('name/{name?}', function($name="Emms"){
// 	 return "Hola, ".$name;
// }
// );

Route::get('/',"StorehouseController@all");
Route::get('home',"StorehouseController@all");
Route::resource('products',"ProductController");
Route::resource('almacenes',"StorehouseController");
Route::resource('traspasos',"MovimientoController");
// Route::get('controlador',"ProductController@index");
// Route::get('/', 'WelcomeController@index');

Route::get('login', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
