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


Route::post('/', 'SimcardController@importarSimcard')->name('importar.simcard')->middleware(['admin']);
Route::post('simcard', 'SimcardController@store')->name('simcard.store');
Route::get('simcard', 'SimcardController@index')->name('simcard.index');
Route::put('simcard/{simcard}', 'SimcardController@update')->name('simcard.update')->middleware(['admin']);
Route::get('simcard/{simcard}/edit', 'SimcardController@edit')->name('simcard.edit')->middleware(['admin']);

Route::get('asesor', 'ExcelController@misVentas')->name('mis.ventas')->middleware(['asesor','admin']);
Route::get('usuario', 'HomeController@mostrar')->name('listar.usaurios')->middleware(['admin']);
Route::delete('usuario/{id}', 'HomeController@destroy')->name('user.delete')->middleware(['admin']);
Route::get('/usuario/{usuario}', 'HomeController@edit')->name('user.edit')->middleware(['admin']);
Route::put('usuario/{id}', 'HomeController@update')->name('user.update')->middleware(['admin']);

Route::get('reporte', 'ReporteController@ventas')->name('reporte.ventas')->middleware(['admin']);

Route::get('reporte/export/', 'ReporteController@export')->name('export')->middleware(['admin']);
Route::get('reporte', 'ReporteController@index')->name('reporte.index')->middleware(['admin']);
Route::post('reporte', 'ReporteController@store')->name('reporte.store')->middleware(['admin']);
Route::get('reporte/{reporte}/edit', 'ReporteController@edit')->name('reporte.edit')->middleware(['admin']);
Route::delete('reporte/{reporte}', 'ReporteController@destroy')->name('reporte.destroy')->middleware(['admin']);

Route::get('producto', 'ProductoController@index')->name('producto.index')->middleware(['admin']);
Route::post('producto', 'ProductoController@store')->name('producto.store')->middleware(['admin']);
Route::get('producto/{producto}/edit', 'ProductoController@edit')->name('producto.edit')->middleware(['admin']);
Route::delete('producto/{producto}', 'ProductoController@destroy')->name('producto.destroy')->middleware(['admin']);
Route::put('producto/{producto}', 'ProductoController@update')->name('producto.update')->middleware(['admin']);

Route::get('tipo', 'TipoVentaController@index')->name('tipo.index')->middleware(['admin']);
Route::post('tipo', 'TipoVentaController@store')->name('tipo.store')->middleware(['admin']);
Route::get('tipo/{tipo}/edit', 'TipoVentaController@edit')->name('tipo.edit')->middleware(['admin']);
Route::delete('tipo/{tipo}', 'TipoVentaController@destroy')->name('tipo.destroy')->middleware(['admin']);
Route::put('tipo/{tipo}', 'TipoVentaController@update')->name('tipo.update')->middleware(['admin']);


Route::get('/', 'ReporteController@ventas')->name('reporte.ventas')->middleware(['admin']);
Route::get('reporte', 'ReporteController@index')->name('reporte.index')->middleware(['admin']);
Route::post('reporte', 'ReporteController@store')->name('reporte.store')->middleware(['admin']);
Route::get('reporte/{reporte}/edit', 'ReporteController@edit')->name('reporte.edit')->middleware(['admin']);
Route::delete('reporte/{reporte}', 'ReporteController@destroy')->name('reporte.destroy')->middleware(['admin']);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
