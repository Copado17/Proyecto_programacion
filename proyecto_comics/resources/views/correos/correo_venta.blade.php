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
    <p>Tu ticket de venta digital esta aqui!</p>

    <p> Numero de Venta: {{$datosVenta->id_venta}}</p>
    <p> Venta realizada por: {{$datosVenta->nombre_vendedor}}</p>
    <p> Fecha de Venta: {{$datosVenta->fecha_venta}}</p>

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
            <td>{{$dato->id_venta_individual}}</td>
            <td>{{$dato->nombre_producto_individual}}</td>
            <td>{{$dato->tipo_venta_individual}}</td>
            <td>{{($dato->total_venta_individual)/($dato->cantidad_venta_individual)}}</td>
            <td>{{$dato->cantidad_venta_individual}}</td>
            <td>{{$dato->total_venta_individual}}</td>
        </tr>
        
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Total: </td>
            <td> {{$datosVenta->total_venta}}</td>
        </tr>

      </table>
      



    
</body>
</html>