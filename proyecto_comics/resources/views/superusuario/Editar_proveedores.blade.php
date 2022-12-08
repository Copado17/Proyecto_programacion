@extends('plantillas/fondosuper')
@section('barra_super')
    <title>Editar proveedores</title>
    <div class="slider-thumb">


    </div>
@endsection

@section('contenido')

    @if (session()->has('Mensaje'))
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {!! "<script>
            Swal.fire(
                'Se edito correctamente el proveedor',
                'Regresa a la lista de proveedores',
                'success'
            )
        
        </script>" !!}
    @endif

    <div class=" mt-5 left">
        <a class="waves-effect waves-light btn-small" href="/Lista_proveedores">Regresar a proveedores</a>
    </div>
    <div class="container col-md-5 p-5 my-5 bg-light">
        <div class="card-body mt-5">
            <div class="card-header ">
                <div class="col mb-3">
                    <h1 class="display-5 ">Editar proveedores</h1>
                </div>
                <form action="{{route('Proveedores.update', $consultarId->id_proveedor)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <div class="col mt-2">

                            <div class="text-start">

                                <div class="col mb-3">
                                    <h6>Ingresa el nombre de la Empresa</h6>
                                    <input type="text" class="form-control" name="nombre_proveedor" placeholder="Nombre"
                                    value="{{$consultarId->nombre_proveedor}}" aria-label="default input example">
                                    @if ($errors->has('nombre_proveedor'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('nombre_proveedor') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif
                                </div>
                                <div class="col mb-3">
                                    <h6>Ingresa la direccion del proveedor</h6>
                                    <input class="form-control" type="text" placeholder="Direccion" name="direccion"
                                    value="{{$consultarId->direccion}}" aria-label="default input example">
                                    @if ($errors->has('direccion'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('direccion') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif
                                </div>

                                <div class="col mb-3">
                                    <h6>Ingresa el nombre del Contacto del proveedor</h6>
                                    <input class="form-control" type="text" placeholder="Contacto" name="contacto"
                                    value="{{$consultarId->contacto}}" aria-label="default input example">
                                    @if ($errors->has('contacto'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('contacto') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif

                                </div>

                                <div class="col mb-3">
                                    <h6>Ingresa el pais de procedencia</h6>
                                    <input class="form-control" type="text" placeholder="pais" name="pais"
                                    value="{{$consultarId->pais}}" aria-label="default input example">
                                    @if ($errors->has('pais'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('pais') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif

                                </div>

                                <div class="col mb-3">
                                    <h6>Ingresa el telefono fijo del proveedor</h6>
                                    <input class="form-control" type="number" placeholder="Telfono fijo"
                                        name="numero_fijo" value="{{$consultarId->numero_fijo}}"
                                        aria-label="default input example">
                                    @if ($errors->has('numero_fijo'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('numero_fijo') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif

                                </div>

                                <div class="col mb-3">
                                    <h6>Ingresa el telefono celular del proveedor</h6>
                                    <input class="form-control" type="number" placeholder="Telefono celular"
                                        name="numero_celular" value="{{$consultarId->numero_celular}}"
                                        aria-label="default input example">
                                    @if ($errors->has('numero_celular'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('numero_celular') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif
                                </div>

                                <div class="col mb-3">
                                    <h6>Ingresa el correo del proveedor</h6>
                                    <input class="form-control" type="Email" placeholder="Correo" name="correo"
                                    value="{{$consultarId->correo}}" aria-label="default input example">
                                    @if ($errors->has('correo'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('correo') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-3">
                        <button type="submit" class="waves-effect waves-light btn-small">Editar proveedor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




@endsection


@section('footer')

@stop
