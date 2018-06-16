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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('pestoque', 'PestoqueController');
Route::resource('pprodutos', 'PprodutosController');
Route::resource('pvendas', 'PvendasController');




/*Route::get('listar/gconsultas', 'GconsultaController@listar');
Route::get('listar/gdesejos', 'GdesejoController@listar');
Route::get('listar/gdiarios', 'GdiarioController@listar');
Route::get('listar/ghumores', 'GhumoreController@listar');
Route::get('listar/gvacinas', 'GvacinaController@listar');
Route::get('listar/palimentacoes', 'PalimentacoeController@listar');
Route::get('listar/pbanhos', 'PbanhoController@listar');
Route::get('listar/pconsultas', 'PconsultaController@listar');
Route::get('listar/pfichas', 'PfichaController@listar');
Route::get('listar/pitens', 'PitenController@listar');
Route::get('listar/psonos', 'PsonoController@listar');
Route::get('listar/pvacinas', 'PvacinaController@listar');*/



/*Route::get('menugravidez', function () {
	return view ('menugravidez.index');
});

Route::get('menuposparto', function () {
	return view ('menuposparto.index');
});

Route::get('menurelatorio', function () {
	return view ('menurelatorio.index');
});


Route::get('menu', function () {
	return view ('menu.index');
});*/

//Routes para Auth
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

