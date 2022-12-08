@extends('plantillas/fondosuper')
@section('barra_super')
   
@endsection

@section('contenido')
<title>Proveedores</title>
    <div class="slider-thumb">
        <h2 class="center">Lista de proveedores</h2>

    </div>
    <a class="waves-effect waves-light btn-small" href="/Agregar_proveedores">Agregar proveedor</a>
    <div class="container bg-light my-5 p-4">


        <form action="{{route('Proveedores.buscar')}}" method="get">
            <div class="row">
                <div class="col-12">
                    <label for="exampleInputEmail1" class="form-label">Buscar proveedor</label>
                    <input type="search" class="form-control" id="exampleInputEmail1" value="{{$buscar}}" name="buscar">
               
                <input type="submit" class="btn btn-primary" value="Buscar">
                </div>
            </div>
        </form>
        

       
  

        @if (session()->has('Eliminacion'))
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {!! "<script>
        Swal.fire(
            'Se elimino correctamente el proveedor ',
            'Verifica la lista de proveedores',
            'success'
        )
    
    </script>" !!}
@endif
@if (session()->has('Confirmacion'))
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{!! "<script>
    Swal.fire(
        'Se agrego correctamente ',
        'Verifica la lista de proveedores',
        'success'
    )

</script>" !!}
@endif

@if (session()->has('Editar'))
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {!! "<script>
        Swal.fire(
            'Se edito correctamente ',
            'Verifica la lista de proveedores',
            'success'
        )
    
    </script>" !!}
@endif
@include ('modals/ModalEliminarProveedor')
        <table class="table bg-light  my-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre de Empresa</th>
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
               @if (count($resultRec) <= 0)
                    <tr>
                        <td colspan="9" class="text-center">No hay registros</td>
                    </tr>
                @else 

                @foreach ($resultRec as $item)
                    <tr>
                        <th scope="row">{{ $item->id_proveedor }}</th>
                        <td>{{ $item->nombre_proveedor }}</td>
                        <td>{{ $item->direccion }}</td>
                        <td>{{ $item->pais }}</td>
                        <td>{{ $item->contacto }}</td>
                        <td>{{ $item->numero_fijo }}</td>
                        <td>{{ $item->numero_celular }}</td>
                        <td>{{ $item->correo }}</td>
                        <td>
                           
                            <a href="{{route('Proveedores.edit', $item->id_proveedor)}}" class="waves-effect waves-light btn-small">Editar</a>
                            <button type="button" class="waves-effect waves-light btn-small" data-bs-toggle="modal" data-bs-target="#ModalEliminarProveedor{{$item->id_proveedor}}">
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
