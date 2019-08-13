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

Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@home');

Route::get('/login', function(){
	return view('login');
});
Route::post('/login', 'HomeController@acessar');

Route::get('/cadastrar', function(){
	return view('cadastrar');
});
Route::post('/cadastrar', 'HomeController@add');

Route::get('/desativar/{id}', 'HomeController@desativar');
Route::get('/excluir/{id}', 'HomeController@excluir');

Route::get('/editar/{id}', 'HomeController@editar');
Route::post('/editar/{id}', 'HomeController@alterar');

Route::get('/editar/senha/{id}', 'HomeController@senha');
Route::post('/editar/senha/{id}', 'HomeController@alterarSenha');

Route::get('/sair', 'HomeController@sair');