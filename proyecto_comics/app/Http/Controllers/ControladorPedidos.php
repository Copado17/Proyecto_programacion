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
        /// VALIDAR SI SE INTENTA INGRESAR MULTIPLES PROVEEDORES EN 1 PEDIDO
        $id = $request->PedidoID;

        $selectInv = DB::table('tb_inventario')->where('id_inventario', $id)->first();
        $tipo = $selectInv->tipo_inventario;
        $idProducto = $selectInv->id_producto;

        $proveedorActual = DB::table('tb_pedidos_temp')->select('id_proveedor')->first();

        if(!is_null($proveedorActual)) {
            if ($proveedorActual->id_proveedor != $request->input('Proveedor')) {
                return redirect('superusuario/Pedidos_super')->with('errorProveedor', 'El pedido no se registro');
            }
            
        }

        /// IDENTIFICAR QUE TIPO DE PRODUCTO SE CREA EL PEDIDO TEMPORAL
        switch ($tipo) {
            case 1:
                $tabla = 'tb_comics';
                $id = 'id_comic';
                $nombre = 'nombre_comic';
                break;
            case 2:
                $tabla = 'tb_articulos';
                $id = 'id_articulo';
                $nombre = 'nombre_articulo';
                break;
            default:
                return redirect('superusuario/Pedidos_super')->with('errorTipo', 'El pedido no se registro');
        }

        /// QUERY PARA SACAR DATOS DE PRODUCTO
        
        $queryPedido = DB::table($tabla)->where($id, $idProducto)->first();

        $pedidoCantidad = $request->input('NoOrden');
        $pedidoTotal = $pedidoCantidad * $queryPedido->precio_compra;

        /// INSERT DE PEDIDO TEMPORAL

        DB::table('tb_pedidos_temp')->insert([
            "id_inventario" => $request->input('PedidoID'),
            "nombre_producto" => $queryPedido->$nombre,
            "id_proveedor" => $request->input('Proveedor'),
            "cantidad_pedido" => $pedidoCantidad,
            "compra" => $queryPedido->precio_compra,
            "total" => $pedidoTotal,
        ]);


        return redirect('superusuario/Pedidos_super');
    }

    /**
     * ESTA FUNCION CREA LOS PEDIDOS
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        /// VERIFICA QUE NO ENVIES PEDIDO VACIO

        $checkFirst = DB::table('tb_pedidos_temp')->select('id_proveedor')->first();

        if(is_null($checkFirst)) {
            return redirect('superusuario/Pedidos_super')->with('errorVacio', 'El pedido no se registro');            
        }

        /// CREA UN REGISTRO DE PEDIDO 

        $numeroPedido = 0;
        $totalPedido = 0;

        DB::table('tb_pedidos')->insert([
            "id_proveedor" => $checkFirst->id_proveedor,
            "numero_pedidos" => $numeroPedido,
            "total_pedido" => $totalPedido,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        /// OBTENER DATOS DE LOS PEDIDOS TEMPORALES

        $pedidosTemp = DB::table('tb_pedidos_temp')
            ->join('tb_inventario', 'tb_pedidos_temp.id_inventario', '=', 'tb_inventario.id_inventario')
            ->select('tb_pedidos_temp.*', 'tb_inventario.tipo_inventario')
            ->get();


        // OBTENER EL ID DEL ULTIMO PEDIDO DE LOS CUALES LOS PEDIDOS INDIVIDUALES SERAN ASIGNADOS A

        $idPedido = DB::table('tb_pedidos')->latest('created_at')->first(); 

        /// POR CADA PEDIDO TEMPORAL CREAMOS UN REGISTRO PERMANENTE EN PEDIDOS INDIVIDUALES

        foreach ($pedidosTemp as $pedidoTemp) {

            /// IDENTIFICAR QUE TIPO DE PRODUCTO SE CREA EL PEDIDO
            $tipoP = $pedidoTemp->tipo_inventario;

            switch ($tipoP) {
                case 1:
                    $tabla = 'tb_comics';
                    $id = 'id_comic';
                    $tipo = 'Comic';
                    break;
                case 2:
                    $tabla = 'tb_articulos';
                    $id = 'id_articulo';
                    $tipo = 'Producto';
                    break;
                default:
                    return redirect('superusuario/Pedidos_super')->with('errorTipo', 'El pedido no se registro');
            }

            /// INSERT DE PEDIDO INDIVIDUAL
            DB::table('tb_pedidos_individuales')->insert([
                "id_pedido" => $idPedido->id_pedido,
                "id_inventario" => $pedidoTemp->id_inventario,
                "tipo_pedido" => $tipo,
                "cantidad_pedido_individual" => $pedidoTemp->cantidad_pedido,
                "total_pedido_individual" => $pedidoTemp->total,

                ]);

            /// ACTUALIZACION DE PEDIDO # PEDIDOS Y TOTAL
            $numeroPedido = $numeroPedido + 1;
            $totalPedido = $totalPedido + $pedidoTemp->total;

            DB::table('tb_pedidos')->where('id_pedido', $idPedido->id_pedido)->update([
                "numero_pedidos" => $numeroPedido,
                "total_pedido" => $totalPedido,
                "updated_at" => Carbon::now()
            ]);
    
            /// ACTUALIZACION DE DISPONIBILIDAD DESPUES DE QUE SE CREA EL PEDIDO

            $stockActual = DB::table($tabla)->where($id, $pedidoTemp->id_inventario)->value('disponibilidad');

            $cantidadPedido = $pedidoTemp->cantidad_pedido;
            $newStock = $stockActual + $cantidadPedido;

            DB::table($tabla)->where($id, $pedidoTemp->id_inventario)->update([
                "disponibilidad" => $newStock,
                "updated_at" => Carbon::now()
            ]);

        }

        /// SE BORRAN TODOS LOS REGISTROS DE PEDIDOS TEMPORAL
        DB::table('tb_pedidos_temp')->truncate();
        return redirect('superusuario/Pedidos_super')->with('pedidosEnviado', 'Los pedidos fueron registrados');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sendEmail($id)
    {
        //
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function makePDF($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancel()
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
        DB::table('tb_pedidos_temp')->where('id_pedido_temp', $id)->delete();

        return redirect('superusuario/Pedidos_super');

    }
}