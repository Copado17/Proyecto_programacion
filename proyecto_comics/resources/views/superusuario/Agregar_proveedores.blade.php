@extends('plantillas/fondosuper')
@section('barra_super')
    <title>Agregar proveedores</title>
    <div class="slider-thumb">


    </div>
@endsection

@section('contenido')

    @if (session()->has('Mensaje'))
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {!! "<script>
            Swal.fire(
                'Se agrego correctamente el proveedor',
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
                    <h1 class="display-5 ">Agregar proveedores</h1>
                </div>
                <form action="Agregar_proveedores" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="col mt-2">

                            <div class="text-start">

                                <div class="col mb-3">
                                    <h6>Ingresa el nombre de la Empresa</h6>
                                    <input type="text" class="form-control" name="Empresa" placeholder="Empresa"
                                        value="{{ old('Empresa') }}" aria-label="default input example">
                                    @if ($errors->has('Empresa'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('Empresa') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif
                                </div>
                                <div class="col mb-3">
                                    <h6>Ingresa la direccion del proveedor</h6>
                                    <input class="form-control" type="text" placeholder="Direccion" name="Direccion"
                                        value="{{ old('Direccion') }}" aria-label="default input example">
                                    @if ($errors->has('Direccion'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('Direccion') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif
                                </div>

                                <div class="col mb-3">
                                    <h6>Ingresa el nombre del Contacto del proveedor</h6>
                                    <input class="form-control" type="text" placeholder="Contacto" name="Contacto"
                                        value="{{ old('Contacto') }}" aria-label="default input example">
                                    @if ($errors->has('Contacto'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('Contacto') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif

                                </div>

                                <div class="col mb-3">
                                    <h6>Ingresa el telefono fijo del proveedor</h6>
                                    <input class="form-control" type="number" placeholder="Telfono fijo"
                                        name="Telefono_Fijo" value="{{ old('Telefono_Fijo') }}"
                                        aria-label="default input example">
                                    @if ($errors->has('Telefono_Fijo'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('Telefono_Fijo') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif

                                </div>

                                <div class="col mb-3">
                                    <h6>Ingresa el telefono celular del proveedor</h6>
                                    <input class="form-control" type="number" placeholder="Telefono celular"
                                        name="Telefono_Celular" value="{{ old('Telefono_Celular') }}"
                                        aria-label="default input example">
                                    @if ($errors->has('Telefono_Celular'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('Telefono_Celular') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif
                                </div>

                                <div class="col mb-3">
                                    <h6>Ingresa el correo del proveedor</h6>
                                    <input class="form-control" type="Email" placeholder="Correo" name="Correo"
                                        value="{{ old('Correo') }}" aria-label="default input example">
                                    @if ($errors->has('Correo'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('Correo') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-3">
                        <button type="submit" class="waves-effect waves-light btn-small">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




@endsection


@section('footer')

@stop
