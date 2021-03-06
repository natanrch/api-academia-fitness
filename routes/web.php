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


// Route::group([
// 		'prefix' => 'aluno',
// 		'middleware' => [
// 			'auth', 'usuario-com-senha'
// 		]
// 	], function () {
// 		Route::get('perfil', 'TelaUsuarioController@perfilUsuario');
// 		Route::get('ficha/{id}', 'FichaController@show');
// 		Route::post('ficha/{id}', 'FichaController@setUltimoTreino');
// 	}
// );

Route::group([
	'prefix' => 'aluno',
	'middleware' => 'bloqueado'
], function() {
	Route::get('/perfil', 'TelaUsuarioController@perfilNovo')->middleware(['auth', 'usuario-com-senha']);
	Route::get('/perfil-teste', 'TelaUsuarioController@perfilAPI')->middleware(['auth', 'usuario-com-senha']);
	Route::get('/ficha', 'TelaUsuarioController@ficha')->middleware(['auth', 'usuario-com-senha']);
	Route::post('/ficha', 'TelaUsuarioController@setUltimoTreino')->middleware(['usuario-com-senha']);
	Route::get('/ficha-teste', 'TelaUsuarioController@fichaAPI');
});

Route::get('/sobrenos', 'TelaUsuarioController@sobreNos');

Route::get('/instrutor/perfil', 'TelaUsuarioController@perfilInstrutor')->middleware(['instrutor', 'usuario-com-senha', 'bloqueado']);
Route::post('/instrutor/cadastra-aluno', 'TelaUsuarioController@cadastraAluno')->middleware(['instrutor', 'usuario-com-senha', 'bloqueado']);

Route::get('/cadastra-senha', 'TelaUsuarioController@formSenha')->middleware('auth');
Route::post('/cadastra-senha', 'TelaUsuarioController@cadastraSenha')->middleware('auth');

Route::group([
		'prefix' => 'admin',
		'middleware' => 'admin',
	],  function() {
	Route::get('/', 'AdminController@painel');
	Route::post('/cadastra-instrutor', 'AdminController@cadastraInstrutor');
	Route::post('/cadastra-aluno', 'AdminController@cadastraAluno');
	Route::post('/bloqueia-usuario', 'AdminController@bloqueiaUsuario');
	Route::post('/desbloqueia-usuario', 'AdminController@desbloqueiaUsuario');
	Route::post('/reavaliar', 'AdminController@reavaliar');
});

Route::post('/upload-imagem', 'TelaUsuarioController@fotoPerfil')->middleware('auth');

Route::group([
		'prefix' => 'ficha',
		'middleware' => ['instrutor', 'bloqueado']
	], function() {
	Route::get('create', 'FichaController@create');
	Route::post('create', 'FichaController@store');
	Route::get('{ficha}', 'FichaController@show');
	Route::get('{ficha}/edit', 'FichaController@edit');
	Route::put('{ficha}/edit', 'FichaController@update');
});
