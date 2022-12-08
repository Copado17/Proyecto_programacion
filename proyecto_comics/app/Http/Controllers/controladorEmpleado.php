<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\controladorEmpleado;
use DB;
use Carbon\Carbon;
class controladorEmpleado extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vista= DB::table('tb_articulos' )->get();
        $vista2= DB::table('tb_comics' )->get();
        return view('empleado/Inventario_empleado', compact('vista', 'vista2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function buscar(Request $request)
    {
        $buscar = trim($request->get('buscar'));
        $buscar2 = trim($request->get('buscar2'));

        $resultRec3= DB::table('tb_comics')-> select ('id_comic','nombre_comic', 'edicion', 'disponibilidad','compania','precio_venta','precio_compra')
        ->where('nombre_comic', 'like', '%'.$buscar.'%') ->get();
        $resultRec= DB::table('tb_articulos' )->select ('id_articulo','nombre_articulo', 'tipo', 'marca','disponibilidad', 'descripcion', 'precio_venta', 'precio_compra')

-> where('nombre_articulo', 'like', '%'.$buscar2.'%') ->get();
         return view('empleado/Inventario_empleado', compact('resultRec', 'resultRec3', 'buscar', 'buscar2'));

    }
}
