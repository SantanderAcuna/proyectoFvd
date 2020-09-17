<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

// ruta especial de migraciones

Route::resource('migracion', 'MigracionController');

Route::post('migracion', 'MigracionController@store')->name('migracion.store');

Route::resource('operador', 'OperadorController');

Route::resource('revenue', 'RevenueController');

Route::resource('simcard', 'SimcardController');


Route::post('/', 'SimcardController@importarSimcard')->name('importar.simcard')->middleware(['roles']);
Route::post('simcard', 'SimcardController@store')->name('simcard.store');
Route::get('simcard', 'SimcardController@index')->name('simcard.index');
Route::put('simcard/{simcard}', 'SimcardController@update')->name('simcard.update')->middleware(['roles']);
Route::get('simcard/{simcard}/edit', 'SimcardController@edit')->name('simcard.edit')->middleware(['roles']);

Route::get('asesor', 'ExcelController@misVentas')->name('mis.ventas');
Route::get('usuario', 'HomeController@mostrar')->name('listar.usaurios')->middleware(['roles']);
Route::delete('usuario/{id}', 'HomeController@destroy')->name('user.delete')->middleware(['roles']);
Route::get('/usuario/{usuario}', 'HomeController@edit')->name('user.edit')->middleware(['roles']);
Route::put('usuario/{id}', 'HomeController@update')->name('user.update')->middleware(['roles']);

//Route::get('reporte', 'ReporteController@ventas')->name('reporte.ventas')->middleware(['roles']);
Route::get('/', 'ReporteController@ventas')->name('reporte.ventas')->middleware(['roles']);
Route::get('reporte/export/', 'ReporteController@export')->name('export')->middleware(['roles']);
Route::get('reporte', 'ReporteController@index')->name('reporte.index')->middleware(['roles']);
Route::post('reporte', 'ReporteController@store')->name('reporte.store');
Route::get('reporte/{reporte}/edit', 'ReporteController@edit')->name('reporte.edit')->middleware(['roles']);
Route::delete('reporte/{reporte}', 'ReporteController@destroy')->name('reporte.destroy')->middleware(['roles']);

Route::get('producto', 'ProductoController@index')->name('producto.index')->middleware(['roles']);
Route::post('producto', 'ProductoController@store')->name('producto.store')->middleware(['roles']);
Route::get('producto/{producto}/edit', 'ProductoController@edit')->name('producto.edit')->middleware(['roles']);
Route::delete('producto/{producto}', 'ProductoController@destroy')->name('producto.destroy')->middleware(['roles']);
Route::put('producto/{producto}', 'ProductoController@update')->name('producto.update')->middleware(['roles']);

Route::get('tipo', 'TipoVentaController@index')->name('tipo.index')->middleware(['roles']);
Route::post('tipo', 'TipoVentaController@store')->name('tipo.store')->middleware(['roles']);
Route::get('tipo/{tipo}/edit', 'TipoVentaController@edit')->name('tipo.edit')->middleware(['roles']);
Route::delete('tipo/{tipo}', 'TipoVentaController@destroy')->name('tipo.destroy')->middleware(['roles']);
Route::put('tipo/{tipo}', 'TipoVentaController@update')->name('tipo.update')->middleware(['roles']);



//Route::get('reporte', 'ReporteController@index')->name('reporte.index')->middleware(['roles']);
//Route::post('reporte', 'ReporteController@store')->name('reporte.store');
//Route::get('reporte/{reporte}/edit', 'ReporteController@edit')->name('reporte.edit')->middleware(['roles']);
//Route::delete('reporte/{reporte}', 'ReporteController@destroy')->name('reporte.destroy')->middleware(['roles']);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
