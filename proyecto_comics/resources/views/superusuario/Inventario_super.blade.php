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




    @section('contenido')
        <title>Inventario</title>
        <div class="slider-thumb">
            <h2 class="center">Inventario</h2>

        </div>
        <a class="waves-effect waves-light btn-small" href="/Agregar_comic">Agregar comic</a>

        <a class="waves-effect waves-light btn-small" href="/Agregar_producto">Agregar producto</a>
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
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio venta</th>
                        <th scope="col">Precio comprar</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Born again</td>
                        <td>15</td>
                        <td>$100</td>
                        <td>$80</td>
                        <td><a class="waves-effect waves-light btn-small" href="/Editar_comic">Editar</a>
                            <a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Eliminar</a>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Infinite war</td>
                        <td>20</td>
                        <td>$100</td>
                        <td>$80</td>
                        <td><a class="waves-effect waves-light btn-small" href="/Editar_comic">Editar</a>
                            <a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Eliminar</a>
                        </td>


                    </tr>
                    <tr>
                        <th scope="row">3</th>

                        <td>Civil war</td>
                        <td>10</td>

                        <td>$100</td>
                        <td>$80</td>
                        <td><a class="waves-effect waves-light btn-small" href="/Editar_comic">Editar</a>
                            <a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="container bg-light col-md-7 my-5 p-4 ">
            <h1 class="Dispaly-5">
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
                        <th scope="col">Precio venta</th>
                        <th scope="col">Precio comprar</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Born again</td>
                        <td>15</td>
                        <td>$100</td>
                        <td>$80</td>
                        <td><a class="waves-effect waves-light btn-small" href="/Editar_producto">Editar</a>
                            <a class="waves-effect waves-light btn-small" href="/Editar_producto">Eliminar</a>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Infinite war</td>
                        <td>20</td>
                        <td>$100</td>
                        <td>$80</td>
                        <td><a class="waves-effect waves-light btn-small" href="/Editar_producto">Editar</a>
                            <a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Eliminar</a>
                        </td>


                    </tr>
                    <tr>
                        <th scope="row">3</th>

                        <td>Civil war</td>
                        <td>10</td>

                        <td>$100</td>
                        <td>$80</td>
                        <td><a class="waves-effect waves-light btn-small" href="/Editar_comic">Editar</a>
                            <a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endsection


    @section('footer')

    @stop


</body>

</html>
