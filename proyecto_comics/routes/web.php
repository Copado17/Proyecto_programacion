<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
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

// Vista Login

Route::get('/', function () {
    return view('login');
});

/* Vsitas de super usuario*/
Route::get('Menu_super', function () {
    return view('superusuario/Menu_super');
});

Route::get('/Inventario_super', function () {
    return view('superusuario/Inventario_super');
});
Route::get('/Agregar_comic', function () {
    return view('superusuario/Agregar_comic');
});
Route::get('/Agregar_producto', function () {
    return view('superusuario/Agregar_producto');
});
Route::get('/Lista_proveedores', function () {
    return view('superusuario/Lista_proveedores');
});
Route::get('/Agregar_proveedores', function () {
    return view('superusuario/Agregar_proveedores');
});
Route::get('/Registro_venta', function () {
    return view('superusuario/Registro_venta');
});
Route::get('/Usuarios', function () {
    return view('superusuario/Usuarios');
});
Route::get('/Editar_comic', function () {
    return view('superusuario/Editar_comic');
});
Route::get('/Pedidos_super', function () {
    return view('superusuario/Pedidos_super');
});
Route::get('/punto_ventaSuper', function () {
    return view('superusuario/punto_ventasuper');
});



//formrequest de agregar comic
route::post('Agregar_comic', [Controlador::class, 'validador_comics']);

route::post('Editar_comic', [Controlador::class, 'validador_editarC']);

//formrequest de agregar producto
route::post('Agregar_producto', [Controlador::class, 'validador_producto']);
//formrequest de agregar proveedores
route::post('Agregar_proveedores', [Controlador::class, 'validador_proveedores']);




/* Vsitas de empleado*/
Route::get('/Menu_Empleado', function () {
    return view('empleado/Menu_Empleado');
});
Route::get('/Punto_Venta', function () {
    return view('empleado/punto_venta');
});
Route::get('/Inventario_empleado', function () {
    return view('empleado/Inventario_empleado');
});
Route::get('/punto_venta', function () {
    return view('empleado/punto_venta');
});