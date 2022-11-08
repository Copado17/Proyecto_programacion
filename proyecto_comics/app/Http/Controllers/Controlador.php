<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\validador_comic;
use App\Http\Requests\validador_producto;
use App\Http\Requests\validador_proveedores;

class Controlador extends Controller
{
    //De la vista agregar comic
    public function validador_comics(validador_comic $req){
        return redirect('/Agregar_comic')->with('Mensaje','Tu comic se agrego correctamente');
     }

    //De la formulario de producto
    public function validador_producto(validador_producto $req){
        return redirect('/Agregar_producto')->with('Mensaje','Tu producto se agrego correctamente');
     }
     //De la formulario de proveedores
        public function validador_proveedores(validador_proveedores $req){
            return redirect('/Agregar_proveedores')->with('Mensaje','Tu proveedor se agrego correctamente');
        }
}
