@extends('plantillas/fondosuper')
@section('barra_super')
   
@endsection

@section('contenido')

<title>Usuarios</title>
    <div class="slider-thumb">
        <h2 class="center">Usuarios</h2>

    </div>

        @if (session()->has('Confirmacion'))
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {!! "<script>
            Swal.fire(
                'Se agrego correctamente el usuario',
                'Regresa a la lista de usuarios',
                'success'
            )

        </script>" !!}
        @endif
        @if (session()->has('Confirmacion'))
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {!! "<script>
            Swal.fire(
                'Se agrego correctamente el usuario',
                'Regresa a la lista de usuarios',
                'success'
            )

        </script>" !!}
        @endif
        @if (session()->has('Eliminacion'))
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {!! "<script>
        Swal.fire(
            'Se elimino correctamente ',
            'Verifica la lista de usuarios',
            'success'
        )
    
    </script>" !!}
@endif

@if (session()->has('Editar'))
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {!! "<script>
        Swal.fire(
            'Se edito correctamente el usuario ',
            'Verifica la lista de usuarios',
            'success'
        )
    
    </script>" !!}
@endif

    <div class=" mt-5 left">
        <a class="waves-effect waves-light btn-small" href="/Menu_super">Regresar a menu</a>
    </div>

    <div class="container col-md-5 p-5 my-5 bg-light">
        <div class="card-body mt-5">
            <div class="card-header ">
                <div class="col mb-3">
                    <h1 class="display-5 ">Agregar Usuarios</h1>
                </div>
                <form action="{{ route('Usuarios.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="col mt-2">

                            <div class="text-start">
                                <div class="row">
                                    <div class="col s6">
                                        <div class="col  ">
                                            <h6>Ingresa tu nombre completo de usuarios</h6>
                                            <input class="form-control" type="text" placeholder="Nombre completo "
                                                name="nombre_completo" value="{{ old('nombre_completo') }}"
                                                aria-label="default input example">
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
                                            <h6>Ingresa una contraseña</h6>
                                            <input class="form-control" type="text" placeholder="Password"
                                                name="Password" value="{{ old('Password') }}"
                                                aria-label="default input example">
                                            @if ($errors->has('Password'))
                                                <div class="alert alert-warning col" role="alert">
                                                    <strong>{{ $errors->first('Password') }}</strong>
                                                    <button type="button" class="btn-close right"
                                                        data-bs-dismiss="alert"></button>
                                                </div>
                                            @endif

                                        </div>


                                        <div class="col mt-3 p-3">
                                            <select class="form-select" id="Tipo" name="Tipo" aria-label="Default select example">
                                                <option value="Empleado">Empleado</option>
                                                <option value="Supervisor">Supervisor</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-3">
                        <button type="submit" class="waves-effect waves-light btn-small">Registrar usuario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container bg-light col-md-6 my-5 p-3 ">
        <form action="{{route('Usuarios.buscar')}}" method="get">
            <div class="row">
                <div class="col-12">
                    <label for="exampleInputEmail1" class="form-label">Buscar por nombre de usuario</label>
                    <input type="search" class="form-control" id="exampleInputEmail1" value="{{$buscar}}" name="buscar">
               
                <input type="submit" class="btn btn-primary" value="Buscar">
                </div>
            </div>
        </form>
        
        @include ('modals/ModalEliminarUsuarios')

        <table class="table bg-light  ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if (count($resultRec) <= 0)
                <tr>
                    <td colspan="5" class="text-center">No hay registros</td>
                </tr>
            @else 
                @foreach ($resultRec as $usuario)
                    <tr>
                        <th scope="row">{{ $usuario->id_usuario }}</th>
                        <td>{{ $usuario->nombre_completo}}</td>
                        <td>{{ $usuario->pass_usuario }}</td>
                        <td>{{ $usuario->nivel_usuario }}</td>
                        <td>
                            <a href="{{route('Usuarios.edit', $usuario->id_usuario)}}" class="waves-effect waves-light btn-small">Editar</a>
                            <button type="button" class="waves-effect waves-light btn-small" data-bs-toggle="modal" data-bs-target="#ModalEliminarUsuarios{{$usuario->id_usuario}}">
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
