@extends('plantillas/fondosuper')
@section('barra_super')
    <title>Editar productos</title>
    <div class="slider-thumb">


    </div>
@endsection

@section('contenido')

    



    <div class=" mt-5 left">
        <a class="waves-effect waves-light btn-small" href="/Inventario_super">Regresar inventario</a>
    </div>
    <div class="container col-md-5 p-5 my-5 bg-light">
        <div class="card-body mt-5">
            <div class="card-header ">
                <div class="col mb-3">
                    <h1 class="display-5 ">Editar producto</h1>
                </div>
                <form  action="{{route('Articulos.update', $consultarId->id_articulo)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <div class="col mt-2">

                            <div class="text-start">

                                <div class="col mb-3">
                                    <h6>Ingresa el nombre del producto</h6>
                                    <input type="text" class="form-control" name="nombre_articulo" placeholder="Tipo"
                                    value="{{$consultarId->nombre_articulo}}" aria-label="default input example">
                                    @if ($errors->has('nombre_articulo'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('nombre_articulo') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif

                                </div>

                                <div class="col mb-3">
                                    <h6>Ingresa el tipo de producto</h6>
                                    <input type="text" class="form-control" name="Tipo" placeholder="Tipo"
                                    value="{{$consultarId->tipo}}" aria-label="default input example">
                                    @if ($errors->has('Tipo'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('Tipo') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif

                                </div>
                                <div class="col mb-3">
                                    <h6>Ingresa la marca del producto</h6>
                                    <input class="form-control" type="text" placeholder="Marca" name="Marca"
                                    value="{{$consultarId->marca}}" aria-label="default input example">
                                    @if ($errors->has('Marca'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('Marca') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif

                                </div>

                                <div class="col mb-3">
                                    <h6>Ingresa el precio compra del producto</h6>
                                    <input class="form-control" type="number" placeholder="Precio compra"
                                        name="Precio_compraProducto" value="{{$consultarId->precio_compra}}"
                                        aria-label="default input example">
                                    @if ($errors->has('Precio_compraProducto'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('Precio_compraProducto') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif

                                </div>

                                <div class="col mb-3">
                                    <h6>Ingresa la disponibilidad</h6>
                                    <input class="form-control" type="number" placeholder="Disponibilidad"
                                        name="Disponibilidad" value="{{$consultarId->disponibilidad}}"
                                        aria-label="default input example">
                                    @if ($errors->has('Disponibilidad'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('Disponibilidad') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif

                                </div>

                                <div class="col mb-3">
                                    <h6>Ingresa una descripcion breve</h6>
                                    <input class="form-control" type="text" placeholder="Descripcion" name="Descripcion"
                                    value="{{$consultarId->descripcion}}" aria-label="default input example">
                                    @if ($errors->has('Descripcion'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('Descripcion') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-3">
                        <button type="submit" class="waves-effect waves-light btn-small">Editar un producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




@endsection


@section('footer')

@stop
