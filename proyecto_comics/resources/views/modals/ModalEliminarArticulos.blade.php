@if (session()->has('Eliminacion'))

{!! "<script>
    Swal.fire(
        'Se elimino correctamente ',
        ':)',
        'success'
    )

</script>" !!}

@endif
@foreach ($resultRec as $item)

<div class="modal fade" id="ModalEliminarArticulos{{$item->id_articulo}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="ModalEliminarArticulos{{$item->id_articulo}}" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-dark">
                    <h5 class="modal-title" id="staticBackdropLabel">Eliminar</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-dark">¿Desea eliminar este articulo?</h4>

                <div class="text-dark">
                    <p class="fw-bold">Nombre: {{$item->nombre_articulo}}</p>
                    <p class="fw-bold">Tipo: {{$item->tipo}}</p>
                    <p class="fw-bold">Marca: {{$item->marca}}</p>

                   
                </div>

            </div>
            <div class="modal-footer">
                <form method="post" action="{{route('Articulos.destroy',$item->id_articulo)}}">
                    <button type="submit" class="btn btn-danger">Si, eliminalo</button>
                    @csrf
                    @method('delete')
                </form>


                <button class="btn btn-primary" type="button"  data-bs-dismiss="modal" >No, no lo elimines</button>
            </div>

        </div>

    </div>

</div>
@endforeach

