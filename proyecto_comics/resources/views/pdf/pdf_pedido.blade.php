<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Weirdo Comics!</h1>

    <p>{{$datosPedido->contacto}}, queremos crear esta orden de pedidos por parte de Weirdo Comics para {{$datosPedido->nombre_proveedor}}</p>

    <p> Numero de Pedido: {{$datosPedido->id_pedido}}</p>
    <p> Numero de Articulos a Pedir: {{$datosPedido->numero_pedidos}}</p>
    <p> Fecha de Pedido: {{$datosPedido->created_at}}</p>

    <table>
        <tr>
          <th>#</th>
          <th>Producto</th>
          <th>Categoria</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Total</th>
        </tr>
        @foreach ($datosIndividuales as $dato)
        <tr>
            <td>{{$dato->id_pedido_individual}}</td>
            <td>{{$dato->nombre_producto}}</td>
            <td>{{$dato->tipo_pedido}}</td>
            <td>{{($dato->total_pedido_individual)/($dato->cantidad_pedido_individual)}}</td>
            <td>{{$dato->cantidad_pedido_individual}}</td>
            <td>{{$dato->total_pedido_individual}}</td>
        </tr>
        
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Total: </td>
            <td> {{$datosPedido->total_pedido}}</td>
        </tr>

      </table>
      



    
</body>
</html>