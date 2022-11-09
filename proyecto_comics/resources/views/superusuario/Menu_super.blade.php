<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu SuperUsuario</title>
</head>

<body>

    @extends('plantillas/fondosuper')
    @section('barra_super')
    @endsection


    @section('contenido')
        <title>Menu</title>
        <div class="slider-thumb">
            <h2 class="center">Bienvenido a Weirdo Comics</h2>
        </div>

        <div class="card-group ">
            <div class="card">
                <img src="https://www.esan.edu.pe/images/blog/2021/12/17/1500x844-requisitos-proveedores-17-12-2021.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Proveedores</h5>
                    <p class="card-text">Consulta toda la lista de provedores y agrega proveedores para el ampliar tu
                        inventario</p>
                </div>
                <div class="card-footer">
                    <a class="waves-effect waves-light btn-small" href="/Lista_proveedores">Vamos para alla</a>
                </div>
            </div>
            <div class="card">
                <img src="https://www.docunecta.com/hubfs/claves-aumentar-productividad-empleados.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Usuarios</h5>
                    <p class="card-text">Aqui puedes ver la lista de empleados que estan registrados donde puedes eliminar y
                        agregar un usuario </p>
                </div>
                <div class="card-footer">
                    <a class="waves-effect waves-light btn-small" href="/Usuarios">Vamos para alla</a>

                </div>
            </div>
            <div class="card">
                <img src="https://www.espacios.media/wp-content/uploads/2021/12/proceso-de-ventas.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pedidos</h5>
                    <p class="card-text">En esta parte realizar los pedidos para no quedarnos sin producto y sin comics</p>
                </div>

                <div class="card-footer">
                    <a class="waves-effect waves-light btn-small" href="">Vamos para alla</a>

                </div>
            </div>
        </div>
    @endsection

    @section('footer')
    @endsection


</body>

</html>
