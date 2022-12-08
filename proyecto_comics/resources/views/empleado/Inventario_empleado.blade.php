@extends('plantillas/fondo')
@section('barra')
<title>Inventario</title>
<div class="slider-thumb">
    <h2 class="center">Inventario</h2>

</div>
@endsection

@section('contenido')
<a class="waves-effect waves-light btn-small" href="/Menu_Empleado">Regresar a menu</a>
<div class="container bg-light  col-md-7 my-5 p-4 ">
    <h1 class="Dispaly-5 center">
        Productos

    </h1>
    <form action="{{route('ComicsE.buscar')}}" method="get">
        <div class="row">
            <div class="col-12">
                <label for="exampleInputEmail1" class="form-label">Buscar producto</label>
                <input type="search" class="form-control" id="exampleInputEmail1" value="{{$buscar2}}" name="buscar2">
           
            <input type="submit" class="btn btn-primary" value="Buscar">
            </div>
        </div>
     
    </form>

    <table class="table bg-light my-5 ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo</th>
                <th scope="col">Marca</th>
                <th scope="col">Precio venta</th>
                <th scope="col">Precio comprar</th>
                <th scope="col">Disponibilidad</th>
                <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($resultRec as $item)
            <tr>
                <th scope="row">{{ $item->id_articulo}}</th>
                <td>{{ $item->nombre_articulo }}</td>

                <td>{{ $item->tipo }}</td>
                <td>{{ $item->marca }}</td>
                <td>{{ $item->precio_venta }}</td>
                <td>{{ $item->precio_compra }}</td>
                <td>{{ $item->disponibilidad }}</td>
                <td>{{ $item->descripcion }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>

</div>
</div>


<div class="container bg-light col-md-7 my-5 p-4 ">
    <h1 class="Dispaly-5 center">
        Comics

    </h1>
    <form action="{{route('ComicsE.buscar')}}" method="get">
        <div class="row">
            <div class="col-12">
                <label for="exampleInputEmail1" class="form-label">Buscar comics</label>
                <input type="search" class="form-control" id="exampleInputEmail1" value="{{$buscar}}" name="buscar">
           
            <input type="submit" class="btn btn-primary" value="Buscar">
            </div>
        </div>
     
    </form>

    <table class="table bg-light my-5 ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edicion</th>
                <th scope="col">Disponibilidad</th>
                <th scope="col">Compañia</th>
                <th scope="col">Precio venta</th>
                <th scope="col">Precio comprar</th>
            </tr>
        </thead>
        <tbody>


            @foreach ($resultRec3 as $items)
            <tr>
                <th scope="row">{{ $items->id_comic}}</th>
                <td>{{ $items->nombre_comic}}</td>
                <td>{{ $items->edicion}}</td>
                <td>{{ $items->disponibilidad}}</td>
                <td>{{ $items->compania }}</td>
                <td>{{ $items->precio_venta }}</td>
                <td>{{ $items->precio_compra }}</td>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection


@section('footer')

@stop
