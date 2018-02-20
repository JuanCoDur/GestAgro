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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users','UsersController');

Route::resource('fincas','FincasController');

Route::resource('empleados','EmpleadoController');//contiene todas las rutas de crod

Route::resource('marcas','MarcaController');

Route::resource('tipveh','TipvehController');

Route::resource('vehic','VehiculosController');

Route::resource('predio','PrediosController');

Route::resource('clasifi','ClasController');

Route::resource('prod','ProductosController');

Route::resource('clients','ClientesController');

Route::resource('prov','ProveedoresController');


Route::get('empleadoscrod','EmpleadoController@empleadoscrod', function(){

    return view::make('EmpleadoController.empleadoscrod');
});

Route::get('fincascrod','FincasController@fincascrod', function(){

    return view::make('FincasController.fincascrod');
});

Route::get('empleadoscrod', array('as' => 'empleadoscrod', 'uses' => 'EmpleadoController@empleadoscrod'));
Route::get('fincascrod', array('as' => 'fincascrod', 'uses' => 'FincasController@fincascrod'));
