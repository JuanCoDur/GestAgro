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

/*Route::get('/', function () {
    return view('layouts.principal');
});*/

Auth::routes();

Route::get('/', 'PrincipalController@index');//agregue esta linea para que mande a la paG INICIO travz del login

Route::get('/home', 'HomeController@index')->name('home');//S EL HOME DE LARAVEL

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

Route::resource('activities','ActividadesCOntroller');

Route::resource('pozo','PozosController');

Route::resource('maqui','MaquinariaController');

