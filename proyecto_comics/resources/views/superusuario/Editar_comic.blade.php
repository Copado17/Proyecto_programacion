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
                <form action="{{route('Comics.update', $consultarId->id_comic)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <div class="col mt-2">



                            <div class="col mb-3">
                                <h6>Ingresa el titulo del comic</h6>
                                <input type="text" class="form-control" name="nombre_comic" placeholder="Nombre del comic"
                                value="{{$consultarId->nombre_comic}}" aria-label="default input example">
                                @if ($errors->has('nombre_comic'))
                                    <div class="alert alert-warning col" role="alert">
                                        <strong>{{ $errors->first('nombre_comic') }}</strong>
                                        <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                    </div>
                                @endif

                            </div>

                            
                            <div class="col mb-3">
                                <h6>Ingresa la edicion del comic</h6>
                                <input class="form-control" type="text" placeholder="Edicion" name="edicion"
                                value="{{$consultarId->edicion}}" aria-label="default input example">
                                @if ($errors->has('edicion'))
                                    <div class="alert alert-warning col" role="alert">
                                        <strong>{{ $errors->first('edicion') }}</strong>
                                        <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                    </div>
                                @endif

                            </div>
                            
                            <div class="col mb-3">
                                <h6>Ingresa la disponibilidad</h6>
                                <input class="form-control" type="text" placeholder="disponibilidad" name="disponibilidad"
                                value="{{$consultarId->disponibilidad}}" aria-label="default input example">
                                @if ($errors->has('disponibilidad'))
                                    <div class="alert alert-warning col" role="alert">
                                        <strong>{{ $errors->first('disponibilidad') }}</strong>
                                        <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                    </div>
                                @endif

                            </div>
                            <div class="col mb-3">
                                <h6>Ingresa año de publicacion</h6>
                                <input class="form-control" type="text" placeholder="publicacion" name="publicacion"
                                value="{{$consultarId->publicacion}}" aria-label="default input example">
                                @if ($errors->has('publicacion'))
                                    <div class="alert alert-warning col" role="alert">
                                        <strong>{{ $errors->first('publicacion') }}</strong>
                                        <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                    </div>
                                @endif

                            </div>

                           

                            <div class="col mb-3">
                                <h6>Ingresa el precio compra del comic</h6>
                                <input class="form-control" type="number" step="0.01" placeholder="precio compra" name="precio_compra"
                                value="{{$consultarId->precio_compra}}"  aria-label="default input example">
                                @if ($errors->has('precio_compra'))
                                    <div class="alert alert-warning col" role="alert">
                                        <strong>{{ $errors->first('precio_compra') }}</strong>
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
