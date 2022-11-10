@extends('plantillas/fondosuper')
@section('barra_super')
   
@endsection

@section('contenido')

    
    <title>Registro de ventas</title>
    <div class="slider-thumb">
        <h2 class="center">Registro de ventas</h2>

    </div>
    <a class="waves-effect waves-light btn-small" href="/Menu_super">Regresar a menu</a>
    <div class="container bg-light p-4 my-5">

        <div class=" col-mt-5">
            <label for="exampleInputEmail1" class="form-label">Buscar venta</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <table class="table bg-light my-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fecha de venta</th>
                    <th scope="col">Productos</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Ticket</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>10/02/22</td>
                    <td>Born again</td>
                    <td>Oscar Silvestre</td>
                    <td>$200</td>

                    <td><a class="waves-effect waves-light btn-small" href="#">Descargar </a>

                    </td>


                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>10/02/22</td>
                    <td>Secret wars</td>
                    <td>John Jimenez</td>
                    <td>$300</td>

                    <td><a class="waves-effect waves-light btn-small" href="#">Descargar</a>



                </tr>
                <tr>
                    <th scope="row">3</th>

                    <td>10/02/22</td>
                    <td>Infinite war</td>

                    <td>Sergiño De la madrid</td>
                    <td>$1000</td>

                    <td><a class="waves-effect waves-light btn-small" href="#">Descargar</a>


                </tr>
            </tbody>
        </table>
    </div>
@endsection


@section('footer')

@stop
