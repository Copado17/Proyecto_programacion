<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fondo.css">
    <link rel="stylesheet" href="css/estilos.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato&family=Permanent+Marker&family=Raleway:wght@500&display=swap"
        rel="stylesheet">
    
</head>

<body>


<nav>
            <div class="nav-wrapper">
                <a href="/Menu_Empleado" class="brand-logo">Weirdo Comics</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{route('punto_venta.indexCarrito')}}">Punto Venta</a></li>
                    <li><a href="/Inventario_empleado">Inventario</a></li>
 
                    <a class="waves-effect waves-light btn-small" href="/">Salir</a>

                </ul>
            </div>
        </nav>
    @yield('barra')


    <div class="slider-thumb">


    </div>




    @yield('contenido')
    <footer class="page-footer">
        <div class="container">
            <div class="row mb-0">
                <div class="col l6 s12">
                    <h5 class="white-text">Weirdo Comics</h5>
                    <p class="grey-text text-lighten-4">"Who need a hero?
                        You need a hero, look in the mirror, there go your hero"</p>
                    <p class="grey-text text-lighten-4">Black panther</p>
                </div>

            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2022 Copyright Text

            </div>
        </div>
    </footer>

    @yield('footer')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
