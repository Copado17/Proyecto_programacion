@extends('plantillas/fondosuper')
@section('barra_super')
<title>Inventario</title>
<div class="slider-thumb">
    <h2 class="center">Inventario</h2>
    
</div>
@endsection

@section('contenido')
<div class="container">
<a  class="waves-effect waves-light btn-small" href="/Agregar_comic">Agregar comic</a>

<a class="waves-effect waves-light btn-small" href="/Agregar_producto">Agregar producto</a>
<table class="table">
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
