@extends('plantillas/fondosuper')
@section('barra_super')
<title>Agregar comics</title>
<div class="slider-thumb">
    

</div>
@endsection

@section('contenido')


<div class="container col-md-5 p-5 my-5 bg-light">
    <div class="card-body mt-5">
        <div class="card-header ">
        <div class="col m-3">
                            <h1 class="display-5 ">Agregar comic</h1>
                        </div>
            <form action="Agregar_comic" method="POST">
                @csrf
                <div class="form-group">
                    <div class="col mt-2">

                        <div class="text-start">

                            <div class="col mb-3">
                                <h6>Ingresa el titulo del comic</h6>
                                <input type="text" class="form-control" name="Titulo" placeholder="Titulo"
                                value="{{old('Titulo')}}" aria-label="default input example">
                                
                               
                            </div>
                            <div class="col mb-3">
                                <h6>Ingresa la compañia del comic</h6>
                                <input class="form-control" type="text" placeholder="Compañia" name="Compañia"
                                    value="{{old('Compañia')}}" aria-label="default input example">
                                
                            </div>

                            <div class="col mb-3">
                                <h6>Ingresa el precio compra del comic</h6>
                                <input class="form-control" type="number" placeholder="Precio compra" name="Precio_compra"
                                    value="{{old('Precio_compra')}}" aria-label="default input example">
                                

                            </div>

                            <div class="col mb-3">
                                <h6>Ingresa el precio de venta del comic</h6>
                                <input class="form-control" type="number" placeholder="Precio venta" name="Precio_venta"
                                    value="{{old('Precio_venta')}}" aria-label="default input example">
                                

                            </div>

                            <div class="col mb-3">
                                <h6>Ingresa la edicion del comic</h6>
                                <input class="form-control" type="text" placeholder="Edicion" name="Edicion"
                                    value="{{old('Edicion')}}" aria-label="default input example">
                                
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
