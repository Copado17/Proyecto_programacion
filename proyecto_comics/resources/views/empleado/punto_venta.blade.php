<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Punto Venta</title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

</head>

<body>

    @extends('plantillas/fondosuper')

    @section('barra_super')
    @endsection

    @section('contenido')
        @if (session()->has('errorSock'))
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            {!! "<script>
                                                                    Swal.fire(
                                                                        'Error para añadir al carrito de ventas',
                                                                        'No hay existencias suficientes para crear venta',
                                                                        'error'
                                                                    )    
                                                                </script>" !!}
        @endif
        @if (session()->has('errorVacio'))
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            {!! "<script>
                                                                    Swal.fire(
                                                                        'Error para crear venta',
                                                                        'No puedes crear una venta vacia',
                                                                        'error'
                                                                    )    
                                                                </script>" !!}
        @endif
        @if (session()->has('errorTipo'))
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            {!! "<script>
                                                                    Swal.fire(
                                                                        'Error para crear venta',
                                                                        'Hubo un error de BD',
                                                                        'error'
                                                                    )    
                                                                </script>" !!}
        @endif
        @if (session()->has('ventaEnviada'))
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            {!! "<script>
                                                                    Swal.fire(
                                                                        'Venta Creada',
                                                                        'La venta fue creada y los articulos actualizados',
                                                                        'success'
                                                                    )    
                                                                </script>" !!}
        @endif
        <div class="card bg-light">

            <div class=" text-center">
                <h2 style="color: black">Punto Venta</h2>
            </div>

            <div class="row ">
                <div class=" col-lg-5 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Carrito</span>
                        <span class="badge bg-primary rounded-pill" style="color: aliceblue">{{ $resNoItems }}</span>
                    </h4>
                    <ul class="list-group mb-3">

                        @foreach ($resCarrito as $carrito)
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">{{ $carrito->tipo_producto }}</h6>
                                    <small class="text-muted">{{ $carrito->nombre_producto }}</small>
                                </div>
                                <div>
                                    <h6 class="text-muted">{{ $carrito->valor }} $</h6>
                                    <h6 class="my-0">x{{ $carrito->cantidad }}</h6>
                                </div>
                                <span class="text-muted">{{ $carrito->total }} $</span>
                                <form action="{{ route('punto_venta.destroy', $carrito->id_carrito) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger btn-small" type="submit">
                                        X
                                    </button>
                                </form>
                            </li>
                        @endforeach

                    </ul>

                    <button form="formVenta" class="w-100 waves-effect waves-light btn-small" type="submit">Crear Venta</button>

                </div>

                    <div class="col-md-7 col-lg-7">
                        <form id="formVenta" action="{{ route('punto_venta.storeVenta') }}" method="POST">
                            @csrf

                        <h4 class="mb-3">Empleado que realiza Venta</h4>
                        <div class="row g-3">
                            <div class="col-sm-6">

                                <select class="form-select" id="idVendedor" name="idVendedor">
                                    <option value="">Selecciona Empleado</option>
                                    @foreach ($resEmpleados as $empleado)
                                        <option value="{{ $empleado->id_usuario }}">
                                            {{ $empleado->nombre_usuario }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('idVendedor'))
                                <div class="alert alert-warning col" role="alert">
                                    <small>Selecciona un Empleado</small>
                                    <button type="button" class="btn-close right"
                                        data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            </div>
                        </div>

                        <h4 class="mb-3">Informacion Cliente</h4>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="NombreCliente" name="NombreCliente" value="{{old('NombreCliente')}}">
                            </div>
                            @if ($errors->has('NombreCliente'))
                            <div class="alert alert-warning col" role="alert">
                                <small>Ingresa el Nombre del Cliente</small>
                                <button type="button" class="btn-close right"
                                    data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                            <div class="col-sm-6">
                                <label class="form-label">Telefono</label>
                                <input type="text" class="form-control" id="TelefonoCliente" name="TelefonoCliente" value="{{old('TelefonoCliente')}}">
                            </div>
                            @if ($errors->has('TelefonoCliente'))
                            <div class="alert alert-warning col" role="alert">
                                <small>Ingresa un numero de telefono valido</small>
                                <button type="button" class="btn-close right"
                                    data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                            <div class="col-12">
                                <label class="form-label">Correo<span class="text-muted">(Opcional)</span></label>
                                <input type="email" class="form-control"id="CorreoCliente" name="CorreoCliente" value="{{old('CorreoCliente')}}">
                            </div>
                            @if ($errors->has('CorreoCliente'))
                            <div class="alert alert-warning col" role="alert">
                                <small>Ingresa un correo valido</small>
                                <button type="button" class="btn-close right"
                                    data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        </div>
                    </form>
                    </div>


            </div>

            <div class="row">
                <h4 class="mb-3">Agregar Producto/Comic</h4>

                <form action="{{ route('punto_venta.agregarCarrito') }}" method="POST">
                    @csrf

                    <div class="row gy-3">
                        <div class="col-12">
                            <input class="form-control" list="datalistOptions" id="IDProducto" name="IDProducto"
                                placeholder="Buscar producto...">
                            <datalist id="datalistOptions">
                                <option value=""></option>
                                @foreach ($resComics as $comic)
                                    <option value="{{ $comic->id_inventario }}"> {{ $comic->nombre_comic }} Stock
                                        actual: {{ $comic->disponibilidad }}</option>
                                @endforeach

                                @foreach ($resArticulos as $articulo)
                                    <option value="{{ $articulo->id_inventario }}">{{ $articulo->nombre_articulo }}
                                        Stock actual: {{ $articulo->disponibilidad }}</option>
                                @endforeach
                            </datalist>
                            @if ($errors->has('IDProducto'))
                                <div class="alert alert-warning col" role="alert">
                                    <small>Selecciona un Pedido</small>
                                    <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                        </div>
                        <div class="col-sm-6">
                            <label for="Cantidad">Cantidad</label>
                            <input type="number" value="1" min="1" max="1000" step="1"
                                name="Cantidad" id="Cantidad" />
                        </div>
                        <div class="col-sm-6">
                            <button class="w-100 waves-effect waves-light btn-small" type="submit">Agregar</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection

    @section('footer')
    @endsection



</body>

</html>
