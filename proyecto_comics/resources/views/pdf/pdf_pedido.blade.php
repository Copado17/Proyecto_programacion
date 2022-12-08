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
    <h3>Pedido: {{$responcePedidos->id_pedido}}</h3>

    <p> Compañia: {{$responcePedidos->nombre_proveedor}}</p>
    <p> Contacto: {{$responcePedidos->contacto}}</p>


    <p> Numero de Articulos a Pedir: {{$responcePedidos->numero_pedidos}}</p>
    <p> Fecha de Pedido: {{$responcePedidos->created_at}}</p>

    <table>
        <tr>
          <th>#</th>
          <th>Producto</th>
          <th>Categoria</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Total</th>
        </tr>
        @foreach ($infoPedidoIndv as $dato)
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
            <td> {{$responcePedidos->total_pedido}}</td>
        </tr>

      </table>
      



    
</body>
</html>