@extends('plantillas/fondosuper')
@section('barra_super')
<title>Inventario</title>
<div class="slider-thumb">
    <h2 class="center">Inventario</h2>

</div>
@endsection

@section('contenido')
<a class="waves-effect waves-light btn-small" href="/Agregar_comic">Agregar comic</a>

<a class="waves-effect waves-light btn-small" href="/Agregar_producto">Agregar producto</a>
<div class="container bg-light col-md-7 my-5 p-4 ">

<div class=" col-mt-5">
    <label for="exampleInputEmail1" class="form-label">Buscar</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
<div class="col-md-8">
    <p>
        <label>
            <input type="checkbox"  />
            <span>Comic</span>
        </label>
    </p>
    <p>
        <label>
            <input type="checkbox" />
            <span>Producto</span>
        </label>
    </p>

</div>

    <table class="table bg-light  my-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio venta</th>
                <th scope="col">Precio comprar</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Born again</td>
                <td>15</td>
                <td>$100</td>
                <td>$80</td>
                <td><a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Editar</a>
                    <a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Eliminar</a>
                </td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Infinite war</td>
                <td>20</td>
                <td>$100</td>
                <td>$80</td>
                <td><a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Editar</a>
                    <a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Eliminar</a>
                </td>


            </tr>
            <tr>
                <th scope="row">3</th>

                <td>Civil war</td>
                <td>10</td>

                <td>$100</td>
                <td>$80</td>
                <td><a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Editar</a>
                    <a class="waves-effect waves-light btn-small" href="/Editar_proveedor">Eliminar</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection


@section ('footer')

@stop
