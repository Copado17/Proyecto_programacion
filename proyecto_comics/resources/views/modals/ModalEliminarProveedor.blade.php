<!-- Modal -->

@foreach ($resultRec as $items)

<div class="modal fade" id="ModalEliminarProveedor{{$items->id_proveedor}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="ModalEliminarProveedor{{$items->id_proveedor}}" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-dark">
                    <h5 class="modal-title" id="staticBackdropLabel">Eliminar</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-dark">¿Desea eliminar este proveedor?</h4>

                <div class="text-dark">
                    <p class="fw-bold">Nombre: {{$items->nombre_proveedor}}</p>
                    <p class="fw-bold">Contacto: {{$items->contacto}}</p>
                    <p class="fw-bold">Telefono: {{$items->numero_celular}}</p>

                   
                </div>

            </div>
            <div class="modal-footer">
                <form method="post" action="{{route('Proveedores.destroy',$items->id_proveedor)}}">
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