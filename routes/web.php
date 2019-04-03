<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::get('/instrutor/login', 'Auth\LoginController@formInstrutor');
Route::post('/instrutor/login', 'Auth\LoginController@loginInstrutor');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/cadastro', 'Auth\RegisterController@cadastroInstrutor');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/escolha-perfil', 'TelaUsuarioController@escolhaperfil');
Route::get('/perfil', 'TelaUsuarioController@perfilUsuario');
Route::get('/ficha-aluno', 'TelaUsuarioController@ficha');
Route::get('/sobrenos', 'TelaUsuarioController@sobreNos');

Route::get('/perfil-instrutor', 'TelaUsuarioController@perfilInstrutor')->middleware('instrutor');

Route::group([
		'prefix' => 'adm',
		'middleware' => 'admin',
	],  function() {
	Route::get('/', 'TelaUsuarioController@adm');
});


Route::group(['prefix' => 'treino'], function() {
	Route::get('create', 'TreinoController@create');
	Route::post('create', 'TreinoController@store');
});
Route::group([
		'prefix' => 'ficha',
		'middleware' => 'instrutor',
	], function() {
	Route::get('create', 'FichaController@create');
	Route::post('create', 'FichaController@store');
	Route::get('{ficha}', 'FichaController@show');
});
