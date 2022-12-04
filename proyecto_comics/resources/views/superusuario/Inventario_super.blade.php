<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
</head>

<body>

    @extends('plantillas/fondosuper')
    @section('barra_super')
    @endsection

    @if (session()->has('Confirmacion'))
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {!! "<script>
        Swal.fire(
            'Se agrego correctamente el producto',
            'Regresa al inventario',
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

            <div class=" col-mt-5">
                <label for="exampleInputEmail1" class="form-label">Buscar</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>


            <table class="table bg-light  my-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Precio venta</th>
                        <th scope="col">Precio comprar</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resultRec as $item)
                        <tr>
                            <th scope="row">{{ $item->id_articulo}}</th>
                            <td>{{ $item->nombre_articulo }}</td>
                            <td>{{ $item->disponibilidad }}</td>
                            <td>{{ $item->tipo }}</td>
                            <td>{{ $item->marca }}</td>
                            <td>{{ $item->precio_venta }}</td>
                            <td>{{ $item->precio_compra }}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td>
                                <a href="#" class="waves-effect waves-light btn-small">Editar</a>
                                <a class="waves-effect waves-light btn-small" href="#">Eliminar</a>
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


            <table class="table bg-light  my-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Edicion</th>
                        <th scope="col">Publicacion</th>
                        <th scope="col">Precio venta</th>
                        <th scope="col">Precio comprar</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                   
                        <tr>
                            
                            
                        </tr>
                   
                </tbody>
            </table>
        </div>
    @endsection


    @section('footer')

    @stop


</body>

</html>
