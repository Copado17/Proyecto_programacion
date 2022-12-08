@extends('plantillas/fondosuper')
@section('barra_super')

@endsection

@section('contenido')


    <title>Registro de ventas</title>
    <div class="slider-thumb">
        <h2 class="center">Registro de ventas</h2>

    </div>
    <a class="waves-effect waves-light btn-small" href="/Menu_super">Regresar a menu</a>

    <div class="container col-md-5 p-5 my-5 bg-light">
        <div class="card-body mt-5">
            <div class="card-header ">
                <div class="col mb-3">
                    <h1 class="display-5 ">Genrar Reportes de Venta</h1>
                </div>
            </div>


            <form action="{{route('punto_venta.crearReporte')}}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="col mt-2">
                        <h6>Tipo de Reporte</h6>
                        <div class="row">
                            <select class="form-select" id="tipoReporte" name="tipoReporte">
                                <option value="1">Por Empleado</option>
                                <option value="2">Por Mes</option>
                                <option value="3">Por Dia</option>
                            </select>


                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>Definicion de busqueda</h6>

                                <small>Para buscar por usuario: escribe el nombre de empleado</small>
                                <small>Para buscar por dia: escribe la fecha con formato yyyy-mm-dd</small>
                                <small>Para buscar por usuario: escribe la fecha con formato yyyy-mm</small>

                                <input type="text" id='defReporte' name='defReporte' />
                                @if ($errors->has('defReporte'))
                                    <div class="alert alert-warning col" role="alert">
                                        <strong>{{ $errors->first('defReporte') }}</strong>
                                        <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-3">
                        <button type="submit" class="waves-effect waves-light btn-small">Crear Reporte</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

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

                        <td><a class="waves-effect waves-light btn-small"
                                href="{{ route('punto_venta.crearPDF', $venta->id_venta) }}">Descargar</a>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>

    @endsection


    @section('footer')

    @stop
