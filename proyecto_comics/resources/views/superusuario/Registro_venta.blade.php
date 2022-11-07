@extends('plantillas/fondosuper')
@section('barra_super')
<title>Registro de ventas</title>
<div class="slider-thumb">
    <h2 class="center">Lista de proveedores</h2>

</div>
@endsection

@section('contenido')
<div class="container">

    <table class="table">
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


@section ('footer')

@stop
