@extends('plantillas/fondosuper')
@section('barra_super')
    <title>Proveedores</title>
    <div class="slider-thumb">
        <h2 class="center">Lista de proveedores</h2>

    </div>
@endsection

@section('contenido')
    <a class="waves-effect waves-light btn-small" href="/Agregar_proveedores">Agregar proveedor</a>
    <div class="container bg-light my-5 p-4">

        <div class=" col-mt-5">
            <label for="exampleInputEmail1" class="form-label">Buscar proveedor</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <table class="table bg-light  my-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Numero fijo</th>
                    <th scope="col">Numero celular</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Panni</td>
                    <td>Ramon perez viramontes #20</td>
                    <td>Mexico</td>
                    <td>Oscar Silvestre</td>
                    <td>4751093272</td>
                    <td>9532147</td>
                    <td>pedro33333@gmail.com</td>
                    <td><a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Editar</a>
                        <a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Eliminar</a>
                    </td>


                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Panni</td>
                    <td>Miguel Hidalgo #20</td>
                    <td>Estados unidos</td>
                    <td>John Jimenez</td>
                    <td>4491093272</td>
                    <td>9532147</td>
                    <td>Sanpedro123@gmail.com</td>
                    <td><a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Editar</a>
                        <a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Eliminar</a>


                </tr>
                <tr>
                    <th scope="row">3</th>

                    <td>Panni</td>
                    <td>Villas del refugio #20</td>
                    <td>Canada</td>
                    <td>Sergiño De la madrid</td>
                    <td>4492004598</td>
                    <td>9532147</td>
                    <td>Pongame_10@gmail.com</td>
                    <td><a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Editar</a>
                        <a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Eliminar</a>

                </tr>
            </tbody>
        </table>
    </div>
@endsection


@section('footer')

@stop
