<?php

use Illuminate\Support\Facades\Route;

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


/* Vsitas de empleado*/
Route::get('/', function () {
    return view('empleado/menu_Empleado');
});
Route::get('/Inventario_empleado', function () {
    return view('empleado/Inventario_empleado');
});
