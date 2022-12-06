<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validador_pedido;
use DB;
use Mail;
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
        $resProveedores = DB::table('tb_proveedores')->get();

        $resComics = DB::table('tb_inventario')
            ->leftJoin('tb_comics', 'tb_inventario.id_producto', '=', 'tb_comics.id_comic')
            ->where('tipo_inventario', '1')->get();

        $resArticulos = DB::table('tb_inventario')
            ->leftJoin('tb_articulos', 'tb_inventario.id_producto', '=', 'tb_articulos.id_articulo')
            ->where('tipo_inventario', '2')->get();

        $resPedidos = DB::table('tb_pedidos_temp')
            ->join('tb_proveedores', 'tb_pedidos_temp.id_proveedor', '=', 'tb_proveedores.id_proveedor')
            ->select('tb_pedidos_temp.*', 'tb_proveedores.nombre_proveedor')
            ->get();


        return view('superusuario\Pedidos_super', compact('resProveedores', 'resComics', 'resArticulos', 'resPedidos'));

    }

    /**
     * ESTA FUNCION CREA EL CARRITO DE PEDIDOS SOLO ACEPTA PEDIDOS DEL MISMO PROVEEDOR
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(validador_pedido $request)
    {
        $id = $request->PedidoID;

        $selectInv = DB::table('tb_inventario')->where('id_inventario', $id)->first();
        $tipo = $selectInv->tipo_inventario;
        $idProducto = $selectInv->id_producto;

        $proveedorActual = DB::table('tb_pedidos_temp')->orderby('id_pedido_temp')->pluck('id_proveedor')[0];
        if ($proveedorActual) {
            if ($proveedorActual != $request->input('Proveedor')) {
                return redirect('superusuario/Pedidos_super')->with('proveedorIncorrecto', 'Le pedido no se registro');
            }
            
        }
    

        switch ($tipo) {
            case 1:
                $tabla = 'tb_comics';
                $id = 'id_comic';
                break;
            case 2:
                $tabla = 'tb_articulos';
                $id = 'id_articulo';
                break;
            default:
                return redirect('superusuario/Pedidos_super')->with('', 'Le pedido no se registro');
        }
        

        $queryPedido = DB::table($tabla)->where($id, $idProducto)->first();

        $pedidoCantidad = $request->input('NoOrden');
        $pedidoTotal = $pedidoCantidad * $queryPedido->precio_compra;

        DB::table('tb_pedidos_temp')->insert([
            "id_inventario" => $request->input('PedidoID'),
            "nombre_producto" => $queryPedido->nombre_articulo,
            "id_proveedor" => $request->input('Proveedor'),
            "cantidad_pedido" => $pedidoCantidad,
            "compra" => $queryPedido->precio_compra,
            "total" => $pedidoTotal,
        ]);


        return redirect('superusuario/Pedidos_super');
    }

    /**
     * ESTA FUNCION ENVIA A LAS TABLAS DE LOS PEDIDOS DEPENDIENDO 
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $pedidos = DB::table('tb_pedidos')
            ->join('tb_inventario', 'tb_pedidos.id_inventario', '=', 'tb_inventario.id_inventario')
            ->select('tb_pedidos.*', 'tb_inventario.tipo_inventario')
            ->get();

        foreach ($pedidos as $pedido) {
            if ($pedido->tipo_inventario == 1) {
                DB::table('tb_pedidos_comics')->insert([
                    "id_inventario" => $pedido->id_inventario,
                    "id_proveedor" => $pedido->id_proveedor,
                    "cantidad_pedido" => $pedido->cantidad_pedido,
                    "total" => $pedido->total,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ]);


                $stockActual = DB::table('tb_comics')->where('id_comic', $pedido->id_inventario)->pluck('disponibilidad');
                $cantidadPedido = $pedido->cantidad_pedido;
                $newStock = $stockActual[0] + $cantidadPedido;

                DB::table('tb_comics')->where('id_comic', $pedido->id_inventario)->update([
                    "disponibilidad" => $newStock,
                    "updated_at" => Carbon::now()
                ]);

            }
            ;

            if ($pedido->tipo_inventario == 2) {
                DB::table('tb_pedidos_articulos')->insert([
                    "id_inventario" => $pedido->id_inventario,
                    "id_proveedor" => $pedido->id_proveedor,
                    "cantidad_pedido" => $pedido->cantidad_pedido,
                    "total" => $pedido->total,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()

                ]);

                $stockActual = DB::table('tb_articulos')->where('id_articulo', $pedido->id_inventario)->pluck('disponibilidad');
                $cantidadPedido = $pedido->cantidad_pedido;
                $newStock = $stockActual + $cantidadPedido;

                DB::table('tb_articulos')->where('id_articulo', $pedido->id_inventario)->update([
                    "disponibilidad" => $newStock,
                    "updated_at" => Carbon::now()
                ]);

            }
            ;
        }
        ;

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