<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validador_pedido;
use DB;
use Carbon\Carbon;

class ControladorPedidos extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resProveedores= DB::table('tb_proveedores' )->get();

        $resComics = DB::table('tb_inventario')
        ->leftJoin('tb_comics', 'tb_inventario.id_producto', '=', 'tb_comics.id_comic')
        ->where('tipo_inventario', '1')->get();

        $resArticulos= DB::table('tb_inventario')
        ->leftJoin('tb_articulos', 'tb_inventario.id_producto', '=', 'tb_articulos.id_articulo')
        ->where('tipo_inventario', '2')->get();

        $resPedidos = DB::table('tb_pedidos')
        ->join('tb_proveedores', 'tb_pedidos.id_proveedor', '=', 'tb_proveedores.id_proveedor')
        ->select('tb_pedidos.*', 'tb_proveedores.nombre_proveedor')
        ->get();


        return view('superusuario\Pedidos_super', compact('resProveedores', 'resComics', 'resArticulos', 'resPedidos'));

    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(validador_pedido $request)
    {
        $id = $request->PedidoID;

        $selectInv = DB::table('tb_inventario')->where('id_inventario', $id)->first();
        $tipo = $selectInv->tipo_inventario;
        $idProducto = $selectInv->id_producto;

        if($tipo == 1) {
            $queryComicsPedido = DB::table('tb_comics')->where('id_comic', $idProducto)->first();

            $pedidoCantidad = $request->input('NoOrden');
            $pedidoTotal = $pedidoCantidad * $queryComicsPedido->precio_compra;

            DB::table ('tb_pedidos')->insert([
                "id_inventario" => $request->input('PedidoID'),
                "nombre_producto" => $queryComicsPedido->nombre_comic, 
                "id_proveedor" => $request->input ('Proveedor'),
                "cantidad_pedido" => $pedidoCantidad,
                "compra" => $queryComicsPedido->precio_compra,
                "total" => $pedidoTotal,
             ]);    
        }

        if($tipo == 2) {
            $queryArticloPedido = DB::table('tb_articulos')->where('id_articulo', $idProducto)->first();

            $pedidoCantidad = $request->input('NoOrden');
            $pedidoTotal = $pedidoCantidad * $queryArticloPedido->precio_compra;

            DB::table ('tb_pedidos')->insert([
                "id_inventario" => $request->input('PedidoID'),
                "nombre_producto" => $queryArticloPedido->nombre_articulo, 
                "id_proveedor" => $request->input ('Proveedor'),
                "cantidad_pedido" => $pedidoCantidad,
                "compra" => $queryArticloPedido->precio_compra,
                "total" => $pedidoTotal,
             ]);    
        }


        return redirect('superusuario/Pedidos_super');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()

    {
        $pedidos = DB::table('tb_pedidos')
        ->join('tb_inventario', 'tb_pedidos.id_inventario', '=', 'tb_inventario.id_inventario')
        ->select('tb_pedidos.*', 'tb_inventario.tipo_inventario')
        ->get();

        foreach($pedidos as $pedido){
            if($pedido->tipo_inventario == 1) {
                DB::table ('tb_pedidos_comics')->insert([
                    "id_comic" => $pedido->id_inventario,
                    "id_proveedor" => $pedido->id_proveedor, 
                    "cantidad_pedido" => $pedido->cantidad_pedido,
                    "total" => $pedido->total,
                 ]);


                 $stockActual = DB::table('tb_comics')->where('id_comic', $pedido->id_inventario)->pluck('disponibilidad');
                 $cantidadPedido = $pedido->cantidad_pedido;
                 $newStock = $stockActual[0] + $cantidadPedido;

                 DB::table('tb_comics')->where('id_comic', $pedido->id_inventario)->update([
                     "disponibilidad" => $newStock,
                     "updated_at" => Carbon::now()
                 ]);                        

            };

            if($pedido->tipo_inventario == 2) {
                DB::table ('tb_pedidos_articulos')->insert([
                    "id_articulo" => $pedido->id_inventario,
                    "id_proveedor" => $pedido->id_proveedor, 
                    "cantidad_pedido" => $pedido->cantidad_pedido,
                    "total" => $pedido->total,
                 ]);

                 $stockActual = DB::table('tb_articulos')->where('id_articulo', $pedido->id_inventario)->pluck('disponibilidad');
                 $cantidadPedido = $pedido->cantidad_pedido;
                 $newStock = $stockActual + $cantidadPedido;

                 DB::table('tb_articulos')->where('id_articulo', $pedido->id_inventario)->update([
                     "disponibilidad" => $newStock,
                     "updated_at" => Carbon::now()
                 ]);                        

            };
        };

        DB::table('tb_pedidos')->truncate();
        return redirect('superusuario/Pedidos_super')->with('pedidosEnviado', 'Los pedidos fueron registrados');


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
}
