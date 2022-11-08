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

<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col" style="max-width: 100rem;">
        <div class="card">
            <img src="https://compote.slate.com/images/926e5009-c10a-48fe-b90e-fa0760f82fcd.png?width=1200&rect=680x453&offset=0x30" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Ventas</h5>
                <p class="card-text">Realiza una venta de un comic o un producto</p>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-secondary" href="#">Vamos para alla</button>
                    </div>
                    
            </div>
        </div>
    </div>
    <div class="col" style="max-width: 100rem;">
        <div class="card" >
            <img src="https://www.billin.net/blog/wp-content/uploads/2020/12/Gestio%CC%81n-inventario.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Inventario</h5>
                <p class="card-text">Checa todos los productos que estan en almacen</p>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-secondary" href="Inventario">Vamos para alla</button>
                    </div>
            </div>
        </div>
    </div>
    <div class="col" style="max-width: 100rem;">
        <div class="card" >
            <img src="https://soporte.mygestion.com/media/wp-content/uploads/pedidos-ventas-700x467.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pedidos</h5>
                <p class="card-text">¿Se acabo el inventario? Apurale goku y pide mas productos</p>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-secondary" href="#">Vamos para alla</button>
                    </div>
            </div>
        </div>
    </div>
    <div class="col" style="max-width: 100rem;">
        <div class="card" >
            <img src="https://www.esan.edu.pe/images/blog/2021/12/17/1500x844-requisitos-proveedores-17-12-2021.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Proveedores</h5>
                <p class="card-text">Mira todos la informacion de nuestros proveedores</p>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-secondary" href="#">Vamos para alla</button>
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


