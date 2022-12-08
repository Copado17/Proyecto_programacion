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
                    <th scope="col">Nombre Cliente</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Vendedor</th>
                    <th scope="col">Total</th>
                    <th scope="col">Ticket</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($responceVentas as $venta)
                    <tr>
                        <th scope="row">{{ $venta->id_venta }}</th>
                        <td>{{ $venta->fecha_venta }}</td>
                        <td>{{ $venta->nombre_cliente }}</td>
                        <td>{{ $venta->correo_cliente }}</td>
                        <td>{{ $venta->nombre_vendedor }}</td>
                        <td>{{ $venta->total_venta }}</td>

                        <td><a class="waves-effect waves-light btn-small" href="{{route('punto_venta.crearPDF', $venta->id_venta)}}">Descargar</a>

                        </td>
                    </tr>


                        @endforeach

            </tbody>
        </table>
    </div>
@endsection


@section('footer')

@stop
