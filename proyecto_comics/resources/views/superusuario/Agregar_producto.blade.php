@extends('plantillas/fondosuper')
@section('barra_super')
<title>Agregar productos</title>
<div class="slider-thumb">
    

</div>
@endsection

@section('contenido')


<div class="container col-md-5 p-5 my-5 bg-light">
    <div class="card-body mt-5">
        <div class="card-header ">
        <div class="col mb-3">
                            <h1 class="display-5 ">Agregar producto</h1>
                        </div>
            <form action="Agregar_producto" method="POST">
                @csrf
                <div class="form-group">
                    <div class="col mt-2">

                        <div class="text-start">

                            <div class="col mb-3">
                                <h6>Ingresa el tipo de producto</h6>
                                <input type="text" class="form-control" name="Tipo" placeholder="Tipo"
                                value="{{old('Tipo')}}" aria-label="default input example">
                            </div>
                            <div class="col mb-3">
                                <h6>Ingresa la marca del producto</h6>
                                <input class="form-control" type="text" placeholder="Marca" name="Marca"
                                    value="{{old('Marca')}}" aria-label="default input example">
                                
                            </div>

                            <div class="col mb-3">
                                <h6>Ingresa el precio compra del producto</h6>
                                <input class="form-control" type="number" placeholder="Precio compra" name="Precio_compraProducto"
                                    value="{{old('Precio_compraProducto')}}" aria-label="default input example">
                                

                            </div>

                            <div class="col mb-3">
                                <h6>Ingresa el precio de venta del comic</h6>
                                <input class="form-control" type="number" placeholder="Precio venta" name="Precio_ventaProducto"
                                    value="{{old('Precio_ventaProducto')}}" aria-label="default input example">
                                

                            </div>

                            <div class="col mb-3">
                                <h6>Ingresa una descripcion breve</h6>
                                <input class="form-control" type="text" placeholder="Descripcion" name="Descripcion"
                                    value="{{old('Descripcion')}}" aria-label="default input example">
                                
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




@endsection


@section ('footer')

@stop
