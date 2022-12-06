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
        $resultRec3= DB::table('tb_comics' )->get();
        return view('superusuario/Inventario_super', compact('resultRec', 'resultRec3'));
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
        $consultarId= DB::table('tb_articulos')->where('id_articulo', $id_articulo)->first();
        return view('ModalEliminarArticulos', compact('consultarId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_articulo)
    {
        $consultarId= DB::table('tb_articulos')->where('id_articulo', $id_articulo)->first();
        return view('superusuario/Editar_producto', compact('consultarId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_articulo)
    {
        $suma = $request->input('Precio_compraProducto') + $request->input('Precio_compraProducto') * 0.4;
        DB::table('tb_articulos')->where('id_articulo', $id_articulo)->update([
            "nombre_articulo" => $request->input ('nombre_articulo'),
            "tipo" => $request->input ('Tipo'),
            "marca" => $request->input ('Marca'),
            "precio_compra" => $request->input ('Precio_compraProducto'),
            "precio_venta" => $suma,
            "disponibilidad" => $request->input ('Disponibilidad'),
            "descripcion" => $request->input ('Descripcion'),
            "updated_at" => Carbon::now()
        ]);
        return redirect('/Inventario_super')->with('Editar','Tu recuerdo llego al controlador') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_articulo)
    {
        DB::table('tb_articulos')->where('id_articulo', $id_articulo)->delete();
        DB::table('tb_inventario')->where('tipo_inventario', 2)->where('id_producto', $id_articulo)->delete();

        return redirect('/Inventario_super')->with('Eliminacion','Tu recuerdo se ha eliminado') ;
    }
}
