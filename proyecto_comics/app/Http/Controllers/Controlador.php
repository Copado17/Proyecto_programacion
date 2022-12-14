<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\validador_comic;
use App\Http\Requests\validador_producto;
use App\Http\Requests\validador_pedido;
use App\Http\Requests\validador_usuario;

use App\Http\Requests\validador_proveedores;
use App\Http\Requests\validador_editarC;
use App\Http\Requests\validador_EditarP;
use App\Http\Requests\validador_EditarProducto;
use App\Http\Requests\validador_EditarU;

class Controlador extends Controller
{
    //De la vista agregar comic
    public function validador_comics(validador_comic $req){
        return redirect('/Agregar_comic')->with('Mensaje','Tu comic se agrego correctamente');
     }
     public function validador_editarC(validador_editarC $req){
        return redirect('/Editar_comic')->with('Mensaje','Tu comic se agrego correctamente');
     }


    //De la formulario de producto
    public function validador_producto(validador_producto $req){
        return redirect('/Agregar_producto')->with('Mensaje','Tu producto se agrego correctamente');
     }

     public function validador_EditarProducto(validador_EditarProducto $req){
        return redirect('/Editar_producto')->with('Mensaje','se edito el producto correctamente');
    }

     //De la formulario de proveedores
        public function validador_proveedores(validador_proveedores $req){
            return redirect('/Agregar_proveedores')->with('Mensaje','Tu proveedor se agrego correctamente');
        }
        public function validador_EditarP(validador_EditarP $req){
            return redirect('/Editar_proveedores')->with('Mensaje','Tu proveedor se edito correctamente');
        }

     //formulario de usuarios
        public function validador_usuario(validador_usuario $req){
            return redirect('/Usuarios')->with('Mensaje','Tu usuario se agrego correctamente');
        }

        public function validador_editarU(validador_EditarU $req){
            return redirect('/Editar_usuarios')->with('Mensaje','Tu usuario se editor correctamente');
        }

    // Controlador Agregar Pedido

    public function validador_pedido(validador_pedido $req) {
        return redirect('/Pedidos_super')->with('Mensaje', 'Los pedidos de agregaron correctamente');
    }
}
