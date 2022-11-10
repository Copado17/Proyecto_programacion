@extends('plantillas/fondo')
@section('barra')
    <title>Inventario</title>
    <div class="slider-thumb">
        <h2 class="center">Inventario</h2>

    </div>
@endsection

@section('contenido')
<a class="waves-effect waves-light btn-small" href="/Menu_Empleado">Regresar a menu</a>
<div class="container bg-light col-md-7 p-4 ">
            <h1 class="Dispaly-5 center">
                Comics

            </h1>

            <div class=" col-mt-5">
                <label for="exampleInputEmail1" class="form-label">Buscar</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>


            <table class="table bg-light w-100 ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio venta</th>
                        <th scope="col">Precio comprar</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Born again</td>
                        <td>15</td>
                        <td>$100</td>
                        <td>$80</td>
                       

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Infinite war</td>
                        <td>20</td>
                        <td>$100</td>
                        <td>$80</td>
                        


                    </tr>
                    <tr>
                        <th scope="row">3</th>

                        <td>Civil war</td>
                        <td>10</td>

                        <td>$100</td>
                        <td>$80</td>
                        
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="container bg-light col-md-7 my-5 p-4 ">
            <h1 class="Dispaly-5 center">
                Productos

            </h1>
            <div class=" col-mt-5">
                <label for="exampleInputEmail1" class="form-label">Buscar</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>


            <table class="table bg-light  w-100 ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio venta</th>
                        <th scope="col">Precio comprar</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Born again</td>
                        <td>15</td>
                        <td>$100</td>
                        <td>$80</td>
                    

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Infinite war</td>
                        <td>20</td>
                        <td>$100</td>
                        <td>$80</td>
                      


                    </tr>
                    <tr>
                        <th scope="row">3</th>

                        <td>Civil war</td>
                        <td>10</td>

                        <td>$100</td>
                        <td>$80</td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
@endsection


@section('footer')

@stop
