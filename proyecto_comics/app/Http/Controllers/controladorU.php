<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\controladorU;
use App\Http\Requests\validador_usuario;
use DB;
use Carbon\Carbon;

class controladorU extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultRec= DB::table('tb_usuarios' )->get();
        return view('superusuario/Usuarios', compact('resultRec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superusuario/Editar_usuarios');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validador_usuario $request)
    {
        DB::table ('tb_usuarios')->insert([
            "nombre_completo" => $request->input ('nombre_completo'),
            "pass_usuario" => $request->input ('Password'),
            "nivel_usuario" => $request->input ('Tipo'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ]);
         return redirect('/Usuarios')->with('Confirmacion','Tu recuerdo llego al controlador') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_usuario)
    {
        $consultarId= DB::table('tb_usuarios')->where('id_usuario', $id_usuario)->first();
        return view('superusuario/Editar_usuarios', compact('consultarId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validador_usuario $request, $id_usuario)
    {
        DB::table('tb_usuarios')->where('id_usuario', $id_usuario)->update([
            "nombre_completo" => $request->input ('nombre_completo'),
            "pass_usuario" => $request->input ('Password'),
            "nivel_usuario" => $request->input ('Tipo'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ]);
         return redirect('/Usuarios')->with('Confirmacion','Tu recuerdo llego al controlador') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_usuario)
    {
        DB::table('tb_usuarios')->where('id_usuario', $id_usuario)->delete();
        return redirect('/Usuarios')->with('Eliminacion','Tu recuerdo se ha eliminado') ;
    }
}
