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
                <form action="Agregar_usuarios" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="col mt-2">
                            <div class="text-start">
                                <div class="row">
                                    <div class="col">
                                        <label>Proveedor</label>
                                        <select class="form-select" id="Proveedor">
                                            <option value="1">Proveedor1</option>
                                            <option value="2">Proveedor2</option>
                                            <option value="3">Proveedor3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s3">
                                        <h6>Pedido</h6>
                                        <select class="form-select" id="PedidoID">
                                            <option value="id1">Pedido Comic</option>
                                            <option value="id2">Pedido Producto</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <h6>Stock Actual</h6>
                                        <input class="form-control" type="text" placeholder="5" aria-label="1" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s6">
                                    <h6># de Orden </h6>
                                    <input type="number" value="1" min="1" max="1000" step="1" />

                                </div>
                            </div>
                            <div class="d-grid gap-3">
                                <button type="submit" class="waves-effect waves-light btn-small">Registrar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container bg-light p-4 my-5">
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
    </div>

    <div class="container">
        <div class="mt-5 right">
            <a class="waves-effect waves-light btn-small" href="">Crear Pedido</a>
        </div>
    </div>


@endsection

@section('footer')
@stop
