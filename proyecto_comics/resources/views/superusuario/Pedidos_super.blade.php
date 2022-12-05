@extends('plantillas/fondosuper')
@section('barra_super')
@endsection

@section('contenido')


    <div class=" mt-5 left">
        <a class="waves-effect waves-light btn-small" href="/Menu_super">Regresar a menu</a>
    </div>
    <div class="container col-md-5 p-5 my-5 bg-light">
        <div class="card-body mt-5">
            <div class="card-header ">
                <div class="col mb-3">
                    <h1 class="display-5 ">Realizar Pedido</h1>
                </div>
                <form action="{{route('Pedidos_Super.create')}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <div class="col mt-2">
                            <div class="text-start">
                                <div class="row">
                                    <div class="col">
                                        <label>Proveedor</label>

                                        <select class="form-select" id="Proveedor" name="Proveedor">
                                            <option value="">Selecciona Proveedor</option>
                                            @foreach ($resProveedores as $proveedor)
                                                <option value="{{ $proveedor->id_proveedor }}">
                                                    {{ $proveedor->nombre_proveedor }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('Proveedor'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>Selecciona un Proveedor</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h6>Pedido</h6>

                                        <label for="Pedido" class="form-label">Producto a Pedir</label>
                                        <input class="form-control" list="datalistOptions" id="PedidoID" name="PedidoID" placeholder="Selecciona Pedido.."
                                            placeholder="Ingresa pedido para buscar...">
                                            <datalist id="datalistOptions">
                                            <option value=""></option>

                                            @foreach ($resComics as $comic)
                                                <option value="{{$comic->id_inventario}}"> {{$comic->nombre_comic}} Stock actual: {{$comic->disponibilidad}}</option>
                                            @endforeach
                                            @foreach ($resArticulos as $articulo)
                                                <option value="{{$articulo->id_inventario}}">{{$articulo->nombre_articulo }} Stock actual: {{$articulo->disponibilidad}}</option>
                                            @endforeach
                                            </datalist>
                                        @if ($errors->has('PedidoID'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>Selecciona un Pedido</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif


                                    </div>
                                </div>

                                
                            </div>
                            <div class="row">
                                <div class="col s6">
                                    <h6># de Orden </h6>
                                    <input type="number" id='NoOrden' name='NoOrden' value="1" step="1" />
                                    @if ($errors->has('NoOrden'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('NoOrden') }}</strong>
                                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif


                                </div>
                            </div>
                            <div class="d-grid gap-3">
                                <button type="submit" class="waves-effect waves-light btn-small">Agregar Pedido</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container bg-light p-5 my-5">
        <table class="table bg-light my-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Item</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio c/u</th>
                    <th scope="col">Precio Total</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Proveedor1</td>
                    <td>Comic: Spider-man: Born again Oscar Silvestre MARVEL</td>
                    <td>28</td>
                    <td>$150</td>
                    <td>$4200</td>
                    <td>
                        <a class="waves-effect waves-light btn-small" href="">Eliminar</a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Proveedor2</td>
                    <td>Producto: Figura Batman Black and White DC</td>
                    <td>3</td>
                    <td>$4000</td>
                    <td>$12000</td>
                    <td>
                        <a class="waves-effect waves-light btn-small" href="">Eliminar</a>
                    </td>

                </tr>
            </tbody>
        </table>
        <div class="container p-2 mb-5">
            <div class="my-5 right">
                <a class="waves-effect waves-light btn-small" href="">Crear Pedido</a>
            </div>
        </div>
    </div>




@endsection

@section('footer')
@stop
