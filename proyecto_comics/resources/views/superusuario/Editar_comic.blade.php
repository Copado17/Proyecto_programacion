@extends('plantillas/fondosuper')
@section('barra_super')
    <title>Editar comics</title>
    <div class="slider-thumb">


    </div>
@endsection

@section('contenido')

    @if (session()->has('Mensaje'))
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {!! "<script>
            Swal.fire(
                'Se edito el comic correctamenta',
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
                <div class="col m-3">
                    <h1 class="display-5 ">Editar comic</h1>
                </div>
                <form action="Editar_comic" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="col mt-2">



                            <div class="col mb-3">
                                <h6>Ingresa el titulo del comic</h6>
                                <input type="text" class="form-control" name="Titulo" placeholder="Titulo"
                                    value="{{ old('Titulo') }}" aria-label="default input example">
                                @if ($errors->has('Titulo'))
                                    <div class="alert alert-warning col" role="alert">
                                        <strong>{{ $errors->first('Titulo') }}</strong>
                                        <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                    </div>
                                @endif

                            </div>
                            <div class="col mb-3">
                                <h6>Ingresa la compañia del comic</h6>
                                <input class="form-control" type="text" placeholder="Compañia" name="Compania"
                                    value="{{ old('Compania') }}" aria-label="default input example">
                                @if ($errors->has('Compania'))
                                    <div class="alert alert-warning col" role="alert">
                                        <strong>{{ $errors->first('Compania') }}</strong>
                                        <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                    </div>
                                @endif

                            </div>

                            <div class="col mb-3">
                                <h6>Ingresa el precio compra del comic</h6>
                                <input class="form-control" type="number" placeholder="Precio compra" name="Precio_compra"
                                    value="{{ old('Precio_compra') }}" aria-label="default input example">
                                @if ($errors->has('Precio_compra'))
                                    <div class="alert alert-warning col" role="alert">
                                        <strong>{{ $errors->first('Precio_compra') }}</strong>
                                        <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                    </div>
                                @endif


                            </div>

                            <div class="col mb-3">
                                <h6>Ingresa el precio de venta del comic</h6>
                                <input class="form-control" type="number" placeholder="Precio venta" name="Precio_venta"
                                    value="{{ old('Precio_venta') }}" aria-label="default input example">
                                @if ($errors->has('Precio_venta'))
                                    <div class="alert alert-warning col" role="alert">
                                        <strong>{{ $errors->first('Precio_venta') }}</strong>
                                        <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                    </div>
                                @endif


                            </div>

                            <div class="col mb-3">
                                <h6>Ingresa la edicion del comic</h6>
                                <input class="form-control" type="text" placeholder="Edicion" name="Edicion"
                                    value="{{ old('Edicion') }}" aria-label="default input example">
                                @if ($errors->has('Edicion'))
                                    <div class="alert alert-warning col" role="alert">
                                        <strong>{{ $errors->first('Edicion') }}</strong>
                                        <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                    </div>
                                @endif

                            </div>



                        </div>
                    </div>
                    <div class="d-grid gap-3">
                        <button type="submit" class="waves-effect waves-light btn-small">Editar comic</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




@endsection


@section('footer')

@stop
