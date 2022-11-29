<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log-in</title>
</head>

<body>
    @extends('plantillas/fondosuper')
    @section('navbar')
    @endsection
    @section('contenido')

        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col col-xl-10">
                    <div class="card bg-light" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://box01.comicbookplus.com/viewer/b6/b6daf90f41a11601b4cfa9c15c05d61d/0.jpg"
                                    class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form>

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <span class="brand-logo" style="font-size: 2em">Weirdo Comics!</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingresa a tu Cuenta
                                        </h5>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="correoUsuario" class="form-control form-control-lg" />
                                            <label class="form-label">Correo</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="contraUsuario"
                                                class="form-control form-control-lg" />
                                            <label class="form-label">Contraseña</label>
                                        </div>


                                        <div class="pt-1 mb-4">
                                            <a class="btn btn-dark btn-block" href="Menu_Empleado">Ingresar Empleado</a>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <a class="btn btn-dark btn-block" href="Menu_super">Ingresar Admin</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @stop


</body>

</html>
