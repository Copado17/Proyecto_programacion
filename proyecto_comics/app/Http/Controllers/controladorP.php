<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\controladorP;
use App\Http\Requests\validador_proveedores;
use DB;
use Carbon\Carbon;

class controladorP extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultRec= DB::table('tb_proveedores' )->get();
        return view('superusuario/Lista_proveedores', compact('resultRec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superusuario/Agregar_proveedores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validador_proveedores $request)
    {
     
        DB::table ('tb_proveedores')->insert([
            "nombre_proveedor" => $request->input ('nombre_proveedor'),
            "direccion" => $request->input ('direccion'),
            "contacto" => $request->input ('contacto'),
            "pais" => $request->input ('pais'),
            "numero_fijo" => $request->input ('numero_fijo'),
            "numero_celular" => $request->input ('numero_celular'),
            "correo" => $request->input ('correo'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ]);
         return redirect('/Lista_proveedores')->with('Confirmacion','Tu recuerdo llego al controlador') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_proveedor)
    {
        $consultarId= DB::table('tb_proveedores')->where('id_proveedor', $id_proveedor)->first();
        return view('ModalEliminarArticulos', compact('consultarId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_proveedor)
    {
        $consultarId= DB::table('tb_proveedores')->where('id_proveedor', $id_proveedor)->first();
        return view('superusuario/Editar_proveedores', compact('consultarId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validador_proveedores $request, $id_proveedor)
    {

        DB::table('tb_proveedores')->where('id_proveedor', $id_proveedor)->update([
            "nombre_proveedor" => $request->input ('nombre_proveedor'),
            "direccion" => $request->input ('direccion'),
            "contacto" => $request->input ('contacto'),
            "pais" => $request->input ('pais'),
            "numero_fijo" => $request->input ('numero_fijo'),
            "numero_celular" => $request->input ('numero_celular'),
            "correo" => $request->input ('correo'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ]);
         return redirect('/Lista_proveedores')->with('Editar','Tu recuerdo llego al controlador') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_proveedor)
    {
        DB::table('tb_proveedores')->where('id_proveedor', $id_proveedor)->delete();
        return redirect('/Lista_proveedores')->with('Eliminacion','Tu recuerdo se ha eliminado') ;
    }
}
