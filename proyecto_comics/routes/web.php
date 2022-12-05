<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
use App\Http\Controllers\ControladorA;
use App\Http\Controllers\ControladorC;
use App\Http\Controllers\ControladorP;
use App\Http\Controllers\ControladorPedidos;

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


Route::get('/Agregar_comic', function () {
    return view('superusuario/Agregar_comic');
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
Route::get('/Editar_usuarios', function () {
    return view('superusuario/Editar_usuarios');
});
Route::get('/Editar_comic', function () {
    return view('superusuario/Editar_comic');
});

Route::get('/Editar_proveedores', function () {
    return view('superusuario/Editar_proveedores');
});

Route::get('/Editar_producto', function () {
    return view('superusuario/Editar_producto');
});

Route::get('/punto_ventaSuper', function () {
    return view('superusuario/punto_ventasuper');
});



//formrequest de agregar comic
route::post('Agregar_comic', [Controlador::class, 'validador_comics']);

route::post('Editar_comic', [Controlador::class, 'validador_editarC']);



route::post('Editar_producto', [Controlador::class, 'validador_EditarProducto']);

//formrequest de agregar proveedores
route::post('Agregar_proveedores', [Controlador::class, 'validador_proveedores']);

route::post('Editar_proveedores', [Controlador::class, 'validador_EditarP']);

//formrequest de agregar pedido
route::post('Agregar_pedido', [Controlador::class, 'validador_pedido']);

//formrequest de agregar usuario
route::post('Agregar_usuario', [Controlador::class, 'validador_usuario']);
//formrequest de agregar usuario
route::post('Editar_usuarios', [Controlador::class, 'validador_editarU']);

//vISTA DE TABLAS DE INVENTARIO
//articulos
Route::get('/Inventario_super',  [controladorA::class, 'index'])->name('Articulos.index');


//create productos
Route::get('/Agregar_producto',  [controladorA::class, 'create'])->name('Articulos.create');

//Agregar productos
Route::post('/Agregar_producto/store',  [controladorA::class, 'store'])->name('Articulos.store');



/// DB CONTROL PEDIDOS
Route::get('superusuario/Pedidos_super', [ControladorPedidos::class, 'index'])->name('Pedidos_Super.index');
Route::post('superusuario/Pedidos_create', [ControladorPedidos::class, 'create'])->name('Pedidos_Super.create');



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