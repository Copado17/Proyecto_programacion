@extends('plantillas/fondosuper')
@section('barra_super')
    <title>Usuarios</title>
    <div class="slider-thumb">
        <h2 class="center">Usuarios</h2>

    </div>
@endsection

@section('contenido')
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
        <a class="waves-effect waves-light btn-small" href="/Menu_super">Regresar a menu</a>
    </div>

    <div class="container col-md-5 p-5 my-5 bg-light">
        <div class="card-body mt-5">
            <div class="card-header ">
                <div class="col mb-3">
                    <h1 class="display-5 ">Agregar Usuarios</h1>
                </div>
                <form action="Agregar_usuario" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="col mt-2">

                            <div class="text-start">
                                <div class="row">
                                    <div class="col s6">
                                        <div class="col ">
                                            <h6>Ingresa tu nombre completo</h6>
                                            <input type="text" class="form-control" name="Nombre" placeholder="Nombre"
                                                value="{{ old('Nombre') }}" aria-label="default input example">
                                            @if ($errors->has('Nombre'))
                                                <div class="alert alert-warning col" role="alert">
                                                    <strong>{{ $errors->first('Nombre') }}</strong>
                                                    <button type="button" class="btn-close right"
                                                        data-bs-dismiss="alert"></button>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col  ">
                                            <h6>Ingresa tu nombre de usuario</h6>
                                            <input class="form-control" type="text" placeholder="Nombre de Usuario"
                                                name="Nombre_usuario" value="{{ old('Nombre_usuario') }}"
                                                aria-label="default input example">
                                            @if ($errors->has('Nombre_usuario'))
                                                <div class="alert alert-warning col" role="alert">
                                                    <strong>{{ $errors->first('Nombre_usuario') }}</strong>
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
                                            <select class="form-select" id="Tipo">
                                                <option value="1">Empleado</option>
                                                <option value="2">Supervisor</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-3">
                        <button type="submit" class="waves-effect waves-light btn-small">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container bg-light col-md-6 my-5 p-3 ">
        <div class=" col-mt-5">
            <label for="exampleInputEmail1" class="form-label">Buscar</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-8">
            <p>
                <label>
                    <input type="checkbox" />
                    <span>Empleado</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" />
                    <span>Supervisor</span>
                </label>
            </p>

        </div>

        <table class="table bg-light  ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Pedro Jesus Copado Andrade</td>
                    <td>Pedro_copado</td>
                    <td>Supervisor</td>

                    <td><a class="waves-effect waves-light btn-small" href="/Editar_Usuario">Editar</a>
                        <a class="waves-effect waves-light btn-small" href="/Eliminar_Usuario">Eliminar</a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Carlos Antes de la mora</td>
                    <td>Carlos Ante</td>
                    <td>Empleado</td>

                    <td><a class="waves-effect waves-light btn-small" href="/Editar_Usuario">Editar</a>
                        <a class="waves-effect waves-light btn-small" href="/Eliminar_Usuario">Eliminar</a>
                    </td>


                </tr>
                <tr>
                    <th scope="row">3</th>

                    <td>Karol Muñoz Vazquez</td>
                    <td>Karol Muñoz</td>
                    <td>Empleado</td>
                    <td><a class="waves-effect waves-light btn-small" href="/Editar_Usuario">Editar</a>
                        <a class="waves-effect waves-light btn-small" href="/Eliminar_Usuario">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


@endsection


@section('footer')

@stop
