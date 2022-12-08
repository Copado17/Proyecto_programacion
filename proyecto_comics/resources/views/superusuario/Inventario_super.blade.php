<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    @extends('plantillas/fondosuper')
    @section('barra_super')
    @endsection


    @if (session()->has('Confirmacion'))
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {!! "<script>
        Swal.fire(
            'Se agrego correctamente ',
            'Verifica en el inventario',
            'success'
        )
    
    </script>" !!}
@endif


@if (session()->has('Eliminacion'))
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {!! "<script>
        Swal.fire(
            'Se elimino correctamente ',
            'Verifica en el inventario',
            'success'
        )
    
    </script>" !!}
@endif

@if (session()->has('Editar'))
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {!! "<script>
        Swal.fire(
            'Se edito correctamente ',
            'Verifica en el inventario',
            'success'
        )
    
    </script>" !!}
@endif

    @section('contenido')
        <title>Inventario</title>
        <div class="slider-thumb">
            <h2 class="center">Inventario</h2>

        </div>
        <a class="waves-effect waves-light btn-small" href="/Agregar_comic">Agregar comic</a>

        <a class="waves-effect waves-light btn-small" href="/Agregar_producto">Agregar producto</a>
        <div class="container bg-light col-md-7 my-5 p-4 ">
            <h1 class="Dispaly-5 ">
                Productos

            </h1>

            <form action="{{route('Comics.buscar')}}" method="get">
                <div class="row">
                    <div class="col-12">
                        <label for="exampleInputEmail1" class="form-label">Buscar Producto</label>
                        <input type="search" class="form-control" id="exampleInputEmail1" value="{{$buscar2}}" name="buscar2">
                   
                    <input type="submit" class="btn btn-primary" value="Buscar">
                    </div>
                </div>
             
            </form>

            @include ('modals/ModalEliminarArticulos')
            <table class="table bg-light  my-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Precio venta</th>
                        <th scope="col">Precio comprar</th>
                        <th scope="col">Disponibilidad</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($resultRec) <= 0)
                    <tr>
                        <td colspan="9" class="text-center">No hay registros</td>
                    </tr>
                @else 

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
                @endif
                </tbody>
            </table>
        </div>


        <div class="container bg-light col-md-7 my-5 p-4 ">
            <h1 class="Dispaly-5">
                Comics

            </h1>
            <form action="{{route('Comics.buscar')}}" method="get">
                <div class="row">
                    <div class="col-12">
                        <label for="exampleInputEmail1" class="form-label">Buscar Comics</label>
                        <input type="search" class="form-control" id="exampleInputEmail1" value="{{$buscar}}" name="buscar">
                   
                    <input type="submit" class="btn btn-primary" value="Buscar">
                    </div>
                </div>
             
            </form>
            
 @include ('modals/ModalEliminarComic')
            <table class="table bg-light  my-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Edicion</th>
                        <th scope="col">Disponibilidad</th>
                        <th scope="col">Compañia</th>
                        <th scope="col">Precio venta</th>
                        <th scope="col">Precio comprar</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @if (count($resultRec3) <= 0)
                    <tr>
                        <td colspan="8" class="text-center">No hay registros</td>
                    </tr>
                @else 
                   @foreach ($resultRec3 as $items)
                        <tr>
                            <th scope="row">{{ $items->id_comic}}</th>
                            <td>{{ $items->nombre_comic}}</td>
                            <td>{{ $items->edicion}}</td>
                            <td>{{ $items->disponibilidad}}</td>
                            <td>{{ $items->compania }}</td>
                            <td>{{ $items->precio_venta }}</td>
                            <td>{{ $items->precio_compra }}</td>
                            <td>
                                <a href="{{route('Comics.edit', $items->id_comic)}}" class="waves-effect waves-light btn-small">Editar</a>
                              
                                <button type="button" class="waves-effect waves-light btn-small" data-bs-toggle="modal" data-bs-target="#ModalEliminarComic{{$items->id_comic}}">
                                    <i class="bi bi-x-circle-fill"></i> Eliminar
                                </button>
                            </td>
                            
                        </tr>
                   @endforeach
                @endif
                
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
