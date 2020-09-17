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



Route::middleware(['auth', 'roles'])->group(function () {


    Route::get('asesor', 'AsesorController@venasesor')->name('venta.dia');

    Route::post('/', 'SimcardController@importarSimcard')->name('importar.simcard');

    Route::put('simcard/{simcard}', 'SimcardController@update')->name('simcard.update');
    Route::get('simcard/{simcard}/edit', 'SimcardController@edit')->name('simcard.edit');


    Route::get('usuario', 'HomeController@mostrar')->name('listar.usaurios');
    Route::delete('usuario/{id}', 'HomeController@destroy')->name('user.delete');
    Route::get('/usuario/{usuario}', 'HomeController@edit')->name('user.edit');
    Route::put('usuario/{id}', 'HomeController@update')->name('user.update');

   
    Route::get('/', 'ReporteController@ventas')->name('reporte.ventas');
    Route::get('reporte/export/', 'ReporteController@export')->name('export');
    Route::get('reporte', 'ReporteController@index')->name('reporte.index');

    Route::get('reporte/{reporte}/edit', 'ReporteController@edit')->name('reporte.edit');
    Route::delete('reporte/{reporte}', 'ReporteController@destroy')->name('reporte.destroy');

    Route::get('producto', 'ProductoController@index')->name('producto.index');
    Route::post('producto', 'ProductoController@store')->name('producto.store');
    Route::get('producto/{producto}/edit', 'ProductoController@edit')->name('producto.edit');
    Route::delete('producto/{producto}', 'ProductoController@destroy')->name('producto.destroy');
    Route::put('producto/{producto}', 'ProductoController@update')->name('producto.update');

    Route::get('tipo', 'TipoVentaController@index')->name('tipo.index');
    Route::post('tipo', 'TipoVentaController@store')->name('tipo.store');
    Route::get('tipo/{tipo}/edit', 'TipoVentaController@edit')->name('tipo.edit');
    Route::delete('tipo/{tipo}', 'TipoVentaController@destroy')->name('tipo.destroy');
    Route::put('tipo/{tipo}', 'TipoVentaController@update')->name('tipo.update');
    Route::get('simcard', 'SimcardController@index')->name('simcard.index');
});


// Ruta de asesores

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('asesor', 'ExcelController@misVentas')->name('mis.ventas');
Route::post('simcard', 'SimcardController@store')->name('simcard.store');
Route::post('reporte', 'ReporteController@store')->name('reporte.store');
