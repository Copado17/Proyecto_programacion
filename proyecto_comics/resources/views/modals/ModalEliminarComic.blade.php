<!-- Modal -->
@if (session()->has('Eliminacion'))

{!! "<script>
    Swal.fire(
        'Se elimino correctamente ',
        ':)',
        'success'
    )

</script>" !!}

@endif
@foreach ($resultRec3 as $items)

<div class="modal fade" id="ModalEliminarComic{{$items->id_comic}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="ModalEliminarArticulos{{$items->id_comic}}" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-dark">
                    <h5 class="modal-title" id="staticBackdropLabel">Eliminar</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-dark">¿Desea eliminar este comic?</h4>

                <div class="text-dark">
                    <p class="fw-bold">Nombre: {{$items->nombre_comic}}</p>
                    <p class="fw-bold">Edicion: {{$items->edicion}}</p>

                   
                </div>

            </div>
            <div class="modal-footer">
                <form method="post" action="{{route('Comics.destroy',$items->id_comic)}}">
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