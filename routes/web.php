<?php

//use Symfony\Component\Routing\Route;

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

Route::get('/cache', function() {
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    return "Caché limpio";
})->name('cache');

Route::resource('escritorio/estadisticas','EstadisticasController');

Route::resource('almacen/categoria','CategoriaController');
//articulo ruta
Route::resource('almacen/articulo','ArticuloController');

//cliente ruta
Route::resource('ventas/cliente','ClienteController');

//proveedor ruta
Route::resource('compras/proveedor','ProveedorController');

//ingreso ruta
Route::resource('compras/ingreso','IngresoController');

//venta ruta
Route::resource('ventas/venta','VentaController');

//seguridad ruta
Route::resource('seguridad/usuario','UsuarioController');

//seguridad ruta
Route::resource('seguridad/roles','rolesController');


//venta dashboard
Route::resource('dashboard','CharFormController');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{slug?}', 'HomeController@index')->name('home');


