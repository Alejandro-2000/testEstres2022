{{--modal delete solo un modal para todos los registros--}}
@php
    $delete_administrador = session("delete_administrador");
@endphp
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Eliminar Registro
            </div>
            <div class="modal-body">
                ¿Esta seguro de eliminar el registro {{$delete_administrador->nombre}}?
            </div>
            <div class="modal-footer" >
                <form action="{{route('administradores.destroy',$delete_administrador->id_admin)}}" method="POST">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger " >Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
{{--script para lanzar el modal--}}
@push("scripts")
    <script type="text/javascript">
        new bootstrap.Modal(document.getElementById('modal-delete')).show();
    </script>
@endpush
