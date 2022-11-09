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
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col col-xl-8">
                    <div class="card bg-light" style="border-radius: 1rem; margin-left: 1rem; margin-right: 1rem;">

                        <div class="py-5 text-center">
                            <h2 style="color: black">Punto Venta</h2>
                        </div>

                        <div class="row g-5">
                            <div class="col-md-5 col-lg-4 order-md-last">
                                <h4 class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-primary">Carrito</span>
                                    <span class="badge bg-primary rounded-pill" style="color: aliceblue">3</span>
                                </h4>
                                <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <h6 class="my-0">Producto</h6>
                                            <small class="text-muted">Descripcion</small>
                                        </div>
                                        <div>
                                            <h6 class="my-0">x1</h6>
                                        </div>
                                        <span class="text-muted">$90.89</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <h6 class="my-0">Comic</h6>
                                            <small class="text-muted">Descripcion</small>
                                        </div>
                                        <div>
                                            <h6 class="my-0">x1</h6>
                                        </div>
                                        <span class="text-muted">$43.99</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <h6 class="my-0">Comic</h6>
                                            <small class="text-muted">Description</small>
                                        </div>
                                        <div>
                                            <h6 class="my-0">x1</h6>
                                        </div>
                                        <span class="text-muted">$50.55</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Total</span>
                                        <strong>$1805.42</strong>
                                    </li>
                                </ul>

                            </div>

                            <div class="col-md-7 col-lg-8">
                                
                                <h4 class="mb-3">Informacion Cliente</h4>
                                <form class="needs-validation" novalidate>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="Nombre" value="">
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="form-label">Telefono</label>
                                            <input type="text" class="form-control" id="Telefono" value="" >
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Correo<span
                                                    class="text-muted">(Opcional)</span></label>
                                            <input type="email" class="form-control" id="Correo"
                                                placeholder="correo@ejemplo.com">
                                        </div>
                                    


                                    <h4 class="mb-3">Agregar Producto/Comic</h4>

                                    <div class="row gy-3">
                                        <div class="col-12">
                                            <label class="form-label">Codigo</label>
                                            <input type="text" class="form-control" id="cc-name" placeholder=""
                                                required>
                                        </div>

                                        <div class="col-12">
                                            
                                        <label class="form-label">Buscar</label>
                                            <select class="form-select" data-live-search="true">
                                                <option>Ejemplo 1</option>
                                                <option>Ejemplo 2</option>
                                                <option>Ejemplo 3</option>
                                            </select>
                                              
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="number" value="1" min="1" max="1000" step="1"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <button class="w-100 btn btn-primary btn-lg" type="submit">Agregar</button>
    
                                        </div>
                                    </div>


                                    <button class="w-100 btn btn-primary btn-lg" type="submit">Continuar al checkout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('footer')
    @endsection



</body>

</html>
