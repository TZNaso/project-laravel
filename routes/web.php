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

Route::get('/', 'HomeController@index'); // pagina principal / page de login
Route::get('/recuperar-senha', 'RecuperarSenhaController@index'); // pagina de recuperação de senha
Route::get('/cadastro', 'CadastroController@index');

// Route::get('/', function () {
//     return view('home/index');
// });

// Route::get('/cadastro', function () {
//     return view('cadastro/index');
// });

// Route::get('/recuperar-senha', function () {
//     return view('recuperar-senha/index');
// });

// Route::get('/reserva', function () {
//     return view('reserva/index');
// });