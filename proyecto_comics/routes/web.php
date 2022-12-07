<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
use App\Http\Controllers\controladorA;
use App\Http\Controllers\controladorC;
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



Route::get('/punto_ventaSuper', function () {
    return view('superusuario/punto_ventasuper');
});





route::post('Editar_comic', [Controlador::class, 'validador_editarC']);




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
//comics
Route::get('/Inventario_super',  [controladorC::class, 'index'])->name('Comics.index');


//CRUD DE ARTICULOS
//create productos
Route::get('/Agregar_producto',  [controladorA::class, 'create'])->name('Articulos.create');
//Agregar productos
Route::post('/Agregar_producto/store',  [controladorA::class, 'store'])->name('Articulos.store');
//Show productos
Route::get('/Inventario_super/{id}/show',  [controladorA::class, 'show'])->name('Articulos.show');
//DELETE
Route::delete('/Inventario_super/{id}/destroy',  [controladorA::class, 'destroy'])->name('Articulos.destroy');
//EDIT
Route::get('/Editar_producto/{id}/edit',  [controladorA::class, 'edit'])->name('Articulos.edit');
//UPDATE
Route::put('/Editar_producto/{id}',  [controladorA::class, 'update'])->name('Articulos.update');

//CRUD DE COMICS
//create productos
Route::get('/Agregar_comic',  [controladorC::class, 'create'])->name('Comics.create');
//Agregar productos
Route::post('/Agregar_comic/store',  [controladorC::class, 'store'])->name('Comics.store');
//Show comics
Route::get('/Inventario_super/{id}/show',  [controladorC::class, 'show'])->name('Comics.show');
//DELETE comicss
Route::delete('/Inventario_super/{id}',  [controladorC::class, 'destroy'])->name('Comics.destroy');
//EDIT
Route::get('/Editar_comic/{id}/edit',  [controladorC::class, 'edit'])->name('Comics.edit');
//UPDATE
Route::put('/Editar_comic/{id}',  [controladorC::class, 'update'])->name('Comics.update');




//PROVEEDORES
Route::get('/Lista_proveedores',  [ControladorP::class, 'index'])->name('Proveedores.index');
//create proveedores
Route::get('/Agregar_proveedores',  [ControladorP::class, 'create'])->name('Proveedores.create');
//Agregar proveedores
Route::post('/Agregar_proveedores/store',  [ControladorP::class, 'store'])->name('Proveedores.store');
//Show proveedores
Route::get('/Lista_proveedores/{id}/show',  [ControladorP::class, 'show'])->name('Proveedores.show');
//DELETE
Route::delete('/Lista_proveedores/{id}/destroy',  [ControladorP::class, 'destroy'])->name('Proveedores.destroy');
//EDIT




/// DB CONTROL PEDIDOS
Route::get('superusuario/Pedidos_super', [ControladorPedidos::class, 'index'])->name('Pedidos_Super.index');
Route::post('superusuario/Pedidos_create', [ControladorPedidos::class, 'create'])->name('Pedidos_Super.create');
Route::get('superusuario/Pedidos_super/store', [ControladorPedidos::class, 'store'])->name('Pedidos_Super.store');



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