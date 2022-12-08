<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedidos Lista</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    @extends('plantillas/fondosuper')
    @section('barra_super')
    @endsection


    @section('contenido')
        <title>Lista Pedidos</title>
        <div class="slider-thumb">
            <h2 class="center">Lista Pedidos</h2>

        </div>
        <a class="waves-effect waves-light btn-small" href="{{ route('Pedidos_Super.indexPedidos') }}">Crear Pedido</a>

        <div class="container bg-light col-md-7 my-5 p-4 ">
            <h1 class="Dispaly-5 ">
                Productos
            </h1>

            <div class=" col-mt-5">
                <label for="exampleInputEmail1" class="form-label">Buscar</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <table class="table bg-light  my-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fecha Pedido</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Contacto</th>
                        <th scope="col">Correo Proveedor</th>
                        <th scope="col">Numero de Pedidos</th>
                        <th scope="col">Total Costo Pedido</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($responsePedidos as $item)
                        <tr>
                            <th scope="row">{{ $item->id_pedido }}</th>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->nombre_proveedor }}</td>
                            <td>{{ $item->contacto }}</td>
                            <td>{{ $item->correo }}</td>
                            <td>{{ $item->numero_pedidos }}</td>
                            <td>{{ $item->total_pedido }}</td>
                            <td>
                                <button type="button" class="waves-effect waves-light btn-small">
                                    <i class="bi bi-x-circle-fill"></i> Descargar PDF
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @endsection


    @section('footer')

    @stop

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
