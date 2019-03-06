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
Route::post('/login', 'Auth\LoginController@loginInstrutor');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil-aluno', 'TelaUsuarioController@perfilUsuario');
Route::get('/perfil-instrutor', 'TelaUsuarioController@perfilInstrutor');
Route::get('/escolha-perfil', 'TelaUsuarioController@escolhaperfil');
Route::get('/ficha', 'TelaUsuarioController@ficha');
Route::get('/adm', 'TelaUsuarioController@adm');

Route::get('/programa/create', 'ProgramaDeTreinamentoController@create');
Route::post('/programa/create', 'ProgramaDeTreinamentoController@store');
