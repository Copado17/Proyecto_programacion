<!-- Modal -->

@foreach ($resultRec as $items)

<div class="modal fade" id="ModalEliminarUsuarios{{$items->id_usuario}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="ModalEliminarUsuarios{{$items->id_usuario}}" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-dark">
                    <h5 class="modal-title" id="staticBackdropLabel">Eliminar</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-dark">¿Desea eliminar este usuario?</h4>

                <div class="text-dark">

                    <p class="fw-bold">Nombre: {{$items->nombre_usuario}}</p>
                    <p class="fw-bold">Rol: {{$items->nivel_usuario}}</p>
                   
                </div>

            </div>
            <div class="modal-footer">
                <form method="post" action="{{route('Usuarios.destroy',$items->id_usuario)}}">
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