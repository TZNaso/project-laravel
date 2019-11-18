<?php

Auth::routes();

// Route::get('/home', 'HomeController@index');

Route::get('/reserva', 'ReservaController@index'); // pagina de reserva
Route::post('/carregando', 'ReservaController@ajaxGetCarrosAction');
Route::post('/reservando', 'ReservaController@ajaxSaveAction');
Route::post('/reservando/update', 'ReservaController@ajaxUpdateAction');

Route::get('/', 'ReservaController@index'); // pagina de reserva

Route::get('/lista-reserva', 'ListaReservaController@index'); // pagina de lista de reservas
Route::post('/listando', 'ListaReservaController@ajaxGetReservaAction');