@extends('plantillas/fondosuper')
@section('barra_super')
   
@endsection

@section('contenido')

<title>Usuarios</title>
    <div class="slider-thumb">
        <h2 class="center">Usuarios</h2>

    </div>

@if (session()->has('Mensaje'))
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{!! "<script>
    Swal.fire(
        'Se agrego correctamente el usuario',
        'Regresa a la lista de usuarios',
        'success'
    )

</script>" !!}
@endif


    <div class=" mt-5 left">
        <a class="waves-effect waves-light btn-small" href="/Usuarios">Regresar a lista de usuarios</a>
    </div>

    <div class="container col-md-5 p-5 my-5 bg-light">
        <div class="card-body mt-5">
            <div class="card-header ">
                <div class="col mb-3">
                    <h1 class="display-5 ">Editar Usuario</h1>
                </div>
                <form href="{{route('Usuarios.update', $consultarId->id_usuario)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <div class="col mt-2">

                            <div class="text-start">
                                <div class="row">
                                    <div class="col s6">
                                        <div class="col ">
                                            <h6>Nombre completo</h6>
                                            <input type="text" class="form-control" name="nombre_completo" placeholder="Nombre completo"
                                            value="{{$consultarId->nombre_completo}}" aria-label="default input example">
                                            @if ($errors->has('nombre_completo'))
                                                <div class="alert alert-warning col" role="alert">
                                                    <strong>{{ $errors->first('nombre_completo') }}</strong>
                                                    <button type="button" class="btn-close right"
                                                        data-bs-dismiss="alert"></button>
                                                </div>
                                            @endif
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6">
                                        <div class="col mb-3 p-3">
                                            <h6>Contraseña</h6>
                                            <input class="form-control" type="text" placeholder="Password"
                                                name="pass_usuario" value="{{$consultarId->pass_usuario}}"
                                                aria-label="default input example">
                                            @if ($errors->has('pass_usuario'))
                                                <div class="alert alert-warning col" role="alert">
                                                    <strong>{{ $errors->first('pass_usuario') }}</strong>
                                                    <button type="button" class="btn-close right"
                                                        data-bs-dismiss="alert"></button>
                                                </div>
                                            @endif

                                        </div>


                                        <div class="col mt-3 p-3">
                                            <select  value="{{$consultarId->nivel_usuario}}"class="form-select" id="Tipo" name="Tipo" aria-label="Default select example">
                                                <option  value="{{$consultarId->nivel_usuario}}">Empleado</option>
                                                <option  value="{{$consultarId->nivel_usuario}}" >Supervisor</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-3">
                        <button type="submit" class="waves-effect waves-light btn-small">Editar usuario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection


@section('footer')

@stop
