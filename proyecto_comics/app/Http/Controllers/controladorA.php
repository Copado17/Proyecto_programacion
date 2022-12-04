<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\controladorA;
use App\Http\Requests\validador_producto;
use DB;
use Carbon\Carbon;

class controladorA extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultRec= DB::table('tb_articulos' )->get();

        return view('superusuario/Inventario_super', compact('resultRec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superusuario/Agregar_producto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validador_producto $request)
    {
        $suma = $request->input('Precio_compraProducto') + $request->input('Precio_compraProducto') * 0.4;
        DB::table ('tb_articulos')->insert([
            "nombre_articulo" => $request->input ('nombre_articulo'),
            "tipo" => $request->input ('Tipo'),
            "marca" => $request->input ('Marca'),
            "precio_compra" => $request->input ('Precio_compraProducto'),
            "precio_venta" => $suma,
            "disponibilidad" => $request->input ('Disponibilidad'),
            "descripcion" => $request->input ('Descripcion'),
            "precio_venta" => $suma,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ]);

         $consultarLast = DB::table('tb_articulos')->latest('created_at')->first();
         DB::table('tb_inventario')->insert([
            "tipo_inventario" => 2,
            "id_producto" => $consultarLast->id_articulo
         ]);
         return redirect('/Inventario_super')->with('Confirmacion','Tu recuerdo llego al controlador') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultarId= DB::table('tb_cliente')->where('id', $id)->first();
        return view('ModalEliminarClientes', compact('consultarId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultarId= DB::table('tb_cliente')->where('id', $id)->first();
        return view('ModalEliminarClientes', compact('consultarId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table ('tb_cliente')->where('id', $id)->update([
            "nombre" => $request->input ('nombre'),
            "correo" => $request->input ('correo'),
            "no_serie_ine" => $request->input ('no_serie_ine'),
            "updated_at" => Carbon::now()
         ]);
         return redirect('TClientes')->with('Editar','Tu recuerdo llego al controlador') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_cliente')->where('id', $id)->delete();
        return redirect('TClientes')->with('Eliminacion','Tu recuerdo se ha eliminado') ;
    }
}
