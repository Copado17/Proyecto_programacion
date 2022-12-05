<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\controladorC;
use App\Http\Requests\validador_comic;
use DB;
use Carbon\Carbon;

class controladorC extends Controller
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
        return view('superusuario/Agregar_comic');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validador_comic $request)
    {
        $suma = $request->input('precio_compra') + $request->input('precio_compra') * 0.4;
        DB::table ('tb_comics')->insert([
            "nombre_comic" => $request->input ('nombre_comic'),
            "edicion" => $request->input ('edicion'),
            "disponibilidad" => $request->input ('disponibilidad'),
            "publicacion" => $request->input ('publicacion'),
            "precio_compra" => $request->input ('precio_compra'),
            "precio_venta" => $suma,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ]);
         return redirect('/Inventario_super')->with('Confirmacion','Tu recuerdo llego al controlador') ;
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_comic)
    {
        $consultarId= DB::table('tb_comics')->where('id_comic', $id_comic)->first();
        return view('ModalEliminarComic', compact('consultarId'));
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
    public function destroy($id_comic)
    {
        DB::table('tb_comics')->where('id_comic', $id_comic)->delete();
        return redirect('/Inventario_super')->with('Eliminacion','Tu recuerdo se ha eliminado') ;
    }
}
