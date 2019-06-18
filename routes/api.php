<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'Auth\LoginController@loginAPI');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:api'], function(){
	Route::get('ficha', 'TelaUsuarioController@fichaAPI');
	Route::get('/perfil-aluno', 'TelaUsuarioController@perfilAPI');
	Route::post('/upload-imagem', 'TelaUsuarioController@fotoPerfilAPI');
	Route::post('/ultimo-treino', 'TelaUsuarioController@setUltimoTreinoAPI');
	Route::post('/nova-senha', 'TelaUsuarioController@cadastraSenhaAPI');
	Route::post('/logout', 'Auth\LoginController@logoutAPI');
});
