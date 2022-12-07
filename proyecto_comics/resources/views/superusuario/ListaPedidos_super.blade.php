<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedidos Lista</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
        <a class="waves-effect waves-light btn-small" href="{{route('Pedidos_Super.indexPedidos')}}">Crear Pedido</a>

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
                        <th scope="col">Correo Proveedor</th>
                        <th scope="col">Numero de Pedidos</th>
                        <th scope="col">Total Costo Pedido</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resultRec as $item)
                        <tr>
                            <th scope="row">{{ $item->id_articulo}}</th>
                            <td>{{ $item->nombre_articulo }}</td>
                            
                            <td>{{ $item->tipo }}</td>
                            <td>{{ $item->marca }}</td>
                            <td>{{ $item->precio_venta }}</td>
                            <td>{{ $item->precio_compra }}</td>
                            <td>{{ $item->disponibilidad }}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td>
                                <a href="{{route('Articulos.edit', $item->id_articulo)}}" class="waves-effect waves-light btn-small">Editar</a>
                                <button type="button" class="waves-effect waves-light btn-small" data-bs-toggle="modal" data-bs-target="#ModalEliminarArticulos{{$item->id_articulo}}">
                                    <i class="bi bi-x-circle-fill"></i> Eliminar
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <div class="container bg-light col-md-7 my-5 p-4 ">
            <h1 class="Dispaly-5">
                Comics

            </h1>
            <div class=" col-mt-5">
                <label for="exampleInputEmail1" class="form-label">Buscar</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
 @include ('modals/ModalEliminarComic')
            <table class="table bg-light  my-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Edicion</th>
                        <th scope="col">Disponibilidad</th>
                        <th scope="col">Publicacion</th>
                        <th scope="col">Precio venta</th>
                        <th scope="col">Precio comprar</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                   
                   @foreach ($resultRec3 as $items)
                        <tr>
                            <th scope="row">{{ $items->id_comic}}</th>
                            <td>{{ $items->nombre_comic}}</td>
                            <td>{{ $items->edicion}}</td>
                            <td>{{ $items->disponibilidad}}</td>
                            <td>{{ $items->publicacion }}</td>
                            <td>{{ $items->precio_venta }}</td>
                            <td>{{ $items->precio_compra }}</td>
                            <td>
                                <a href="#" class="waves-effect waves-light btn-small">Editar</a>
                                <button type="button" class="waves-effect waves-light btn-small" data-bs-toggle="modal" data-bs-target="#ModalEliminarComic{{$items->id_comic}}">
                                    <i class="bi bi-x-circle-fill"></i> Eliminar
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
