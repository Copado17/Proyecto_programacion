@extends('plantillas/fondosuper')
@section('barra_super')
    <title>Agregar productos</title>
    <div class="slider-thumb">


    </div>
@endsection

@section('contenido')

    @if (session()->has('Confirmacion'))
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {!! "<script>
            Swal.fire(
                'Se agrego correctamente el producto',
                'Regresa al inventario',
                'success'
            )
        
        </script>" !!}
    @endif



    <div class=" mt-5 left">
        <a class="waves-effect waves-light btn-small" href="/Inventario_super">Regresar inventario</a>
    </div>
    <div class="container col-md-5 p-5 my-5 bg-light">
        <div class="card-body mt-5">
            <div class="card-header ">
                <div class="col mb-3">
                    <h1 class="display-5 ">Agregar producto</h1>
                </div>
                <form action="/Agregar_producto/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="col mt-2">

                            <div class="text-start">

                                <div class="col mb-3">
                                    <h6>Ingresa el nombre del producto</h6>
                                    <input type="text" class="form-control" name="nombre_articulo" placeholder="Nombre del producto"
                                        value="{{ old('nombre_articulo') }}" aria-label="default input example">
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
                                        value="{{ old('Tipo') }}" aria-label="default input example">
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
                                        value="{{ old('Marca') }}" aria-label="default input example">
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
                                        name="Precio_compraProducto" value="{{ old('Precio_compraProducto') }}"
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
                                        name="Disponibilidad" value="{{ old('Disponibilidad') }}"
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
                                        value="{{ old('Descripcion') }}" aria-label="default input example">
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
                        <button type="submit" class="waves-effect waves-light btn-small">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




@endsection


@section('footer')

@stop
