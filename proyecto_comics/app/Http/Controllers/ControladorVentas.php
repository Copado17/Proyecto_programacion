<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validador_venta;
use App\Http\Requests\validador_carrito;
use DB;
use Carbon\Carbon;

class ControladorVentas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCarrito()
    {
        $resComics = DB::table('tb_inventario')
            ->leftJoin('tb_comics', 'tb_inventario.id_producto', '=', 'tb_comics.id_comic')
            ->where('tipo_inventario', '1')->get();

        $resArticulos = DB::table('tb_inventario')
            ->leftJoin('tb_articulos', 'tb_inventario.id_producto', '=', 'tb_articulos.id_articulo')
            ->where('tipo_inventario', '2')->get();

        $resEmpleados = DB::table('tb_usuarios')->where('nivel_usuario', 'Empleado')->get();
        $resCarrito = DB::table('tb_carrito')->get();
        $resNoItems  = count($resCarrito);


        return view('empleado\punto_venta', compact('resComics', 'resEmpleados', 'resArticulos', 'resCarrito', 'resNoItems'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexVenta()
    {

        // $responsePedidos = DB::table('tb_pedidos')
        //     ->join('tb_proveedores', 'tb_pedidos.id_proveedor', '=', 'tb_proveedores.id_proveedor')
        //     ->get();


        // return view('superusuario\ListaPedidos_super', compact('responsePedidos'));

    }

    /**
     * ESTA FUNCION CREA EL CARRITO DE PEDIDOS SOLO ACEPTA PEDIDOS DEL MISMO PROVEEDOR
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function agregarCarrito(validador_carrito $request)
    {

        /// ENCONTRAR PRODUCTO DEL INVENTARIO CON SU TIPO
        $idInventario = $request->input('IDProducto');
        $cantidad = $request->input('Cantidad');
        $resProducto = DB::table('tb_inventario')->where('id_inventario', $idInventario)->first();
        $tipo = $resProducto->tipo_inventario;
        $idProducto = $resProducto->id_producto;

        switch ($tipo) {
            case 1:
                $tabla = 'tb_comics';
                $id = 'id_comic';
                $nombre = 'nombre_comic';
                $desc = 'Comic';
                break;
            case 2:
                $tabla = 'tb_articulos';
                $id = 'id_articulo';
                $nombre = 'nombre_articulo';
                $desc = 'Articulo';
                break;
            default:
                return redirect('punto_venta')->with('errorTipo', 'El producto no se registro');
        }

        $queryProducto = DB::table($tabla)->where($id, $idProducto)->first();
        /// VERIFICAR QUE HAY STOCK NECESARIO PARA LA VENTA
        $stockActual = $queryProducto->disponibilidad;

        if ($stockActual < $cantidad) {
            return redirect('punto_venta')->with('errorSock', 'El producto no se registro');
        }


        /// CALCULO VENTA

        $precioI = $queryProducto->precio_venta;
        $ventaTotal = $precioI * $cantidad;

        /// INSERT DE CARRITO

        DB::table('tb_carrito')->insert([
            "id_inventario" => $request->input('IDProducto'),
            "nombre_producto" => $queryProducto->$nombre,
            "cantidad" => $request->input('Cantidad'),
            "tipo_producto" => $desc,
            "valor" => $precioI,
            "total" => $ventaTotal,
        ]);

        return redirect('punto_venta');
    }

    /**
     * ESTA FUNCION CREA LOS PEDIDOS
     *
     * @return \Illuminate\Http\Response
     */
    public function storeVenta(validador_venta $request)
    {

        /// VERIFICA QUE NO ENVIES PEDIDO VACIO

        $checkFirst = DB::table('tb_carrito')->select('id_carrito')->first();


        if (is_null($checkFirst)) {
            return redirect('punto_venta')->with('errorVacio', 'La venta no se registro');
        }

        /// CREA UN REGISTRO DE VENTA 
        $totalVenta = 0;

        DB::table('tb_ventas')->insert([
            "nombre_cliente" => $request->NombreCliente,
            "telefono_cliente" => $request->TelefonoCliente,
            "correo_cliente" => $request->CorreoCliente,
            "id_vendedor" => $request->idVendedor,
            "total_venta" => $totalVenta,
            "fecha_venta" => Carbon::now()
        ]);

        /// OBTENER DATOS DEL CARRITO ACTUAL
        $carritoTemp = DB::table('tb_carrito')
        ->join('tb_inventario', 'tb_carrito.id_inventario', '=',  'tb_carrito.id_inventario')
        ->get();

        // OBTENER EL ID DEL REGISTRO DE VENTAS CREADO DE LOS CUALES LAS VENTAS INDIVIDUALES SERAN ASIGNADOS A
        $idVenta = DB::table('tb_ventas')->latest('fecha_venta')->value('id_venta');

        /// POR CADA ITEM EN CARRITO CREAMOS UN REGISTRO PERMANENTE EN VENTAS INDIVIDUALES

        foreach ($carritoTemp as $item) {

            /// IDENTIFICAR QUE TIPO DE PRODUCTO SE CREA EL PEDIDO
            $tipoP = $item->tipo_inventario;

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
                    return redirect('punto_venta')->with('errorTipo', 'La venta no se registro');
            }

            /// ACTUALIZACION DE DISPONIBILIDAD EN INVENTARIO
            /// TAMBIEN SE VUELVE A CHECAR LA DISPONIBILIDAD
            /// SI NOY HAY SUFICIENTES ITEMS SE IGNORA ESTE REGISTRO Y SE CONTINUA  

            $selectInv = DB::table('tb_inventario')->where('id_inventario', $item->id_producto)->first();

            $stockActual = DB::table($tabla)->where($id, $selectInv->id_producto)->value('disponibilidad');

            $cantidad = $item->cantidad;
            $newStock = $stockActual - $cantidad;

            if($newStock < 0) {
                continue;
            }

            DB::table($tabla)->where($id, $item->id_producto)->update([
                "disponibilidad" => $newStock,
                "updated_at" => Carbon::now()
            ]);

            /// INSERT DE VENTA INDIVIDUAL
            DB::table('tb_ventas_individuales')->insert([
                "id_venta" => $idVenta,
                "id_inventario" => $item->id_inventario,
                "tipo_venta_individual" => $tipo,
                "cantidad_venta_individual" => $cantidad,
                "total_venta_individual" => $item->total,
            ]);

            /// ACTUALIZACION DE VENTA # VENTA Y TOTAL
            $totalVenta = $totalVenta + $item->total;

            DB::table('tb_pedidos')->where('id_pedido', $idVenta)->update([
                "total_pedido" => $totalVenta,
                "updated_at" => Carbon::now()
            ]);

        }

        /// SE BORRAN TODOS LOS REGISTROS DE PEDIDOS TEMPORAL
        DB::table('tb_carrito')->truncate();
        return redirect('punto_venta')->with('ventaEnviada', 'La venta fue registrada');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function enviarEmail($id)
    {
        //
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function crearPDF($id)
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
        DB::table('tb_carrito')->where('id_carrito', $id)->delete();

        return redirect('punto_venta');

    }
}