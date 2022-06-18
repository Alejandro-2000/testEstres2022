<!-- Modal para actualizar registros-->
<div class="modal fade" id="modal-edit" role="dialog">
    <div class="modal-dialog">

        @php
            //$edit_persona = session("edit_persona");
            $edit_administrador = Session::has("edit_administrador") ? session("edit_administrador") : Session::get("_old_input");
        @endphp

        <!-- Modal content-->
        <form method="POST"  action="{{url('/administradores/'.(isset($edit_administrador->id_admin) ? $edit_administrador->id_admin : $edit_administrador["id_admin"]))}}" role="form" enctype="multipart/form-data">
            <div class="modal-content">
                <input type="hidden" value="{{isset($edit_administrador->id_admin) ? $edit_administrador->id_admin : $edit_administrador["id_admin"]}}" name="id_admin">
            <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <section class="content container-fluid">
                        <div class="row">
                            <div class="col-md-13">
                                @includeif('partials.errors')
                                <div class="card card-default">
                                    <div class="card-body">

                                            <div class="box box-info padding-1">
                                                <div class="box-body">
                                                    {{ csrf_field() }}
                                                        {{ method_field('PATCH') }}

                                                    <div class="form-group">
                                                        <label for="nombre">Nombre</label>
                                                        <select name="id_persona" class="form-control{{$errors->has('id_persona') ? ' is-invalid' : ''}}">
                                                            <option value="" selected disabled>Selecciona un valor</option>

                                                            @foreach($datos_personas as $persona)
                                                                <option value="{{$persona->id_persona}}" {{(isset($edit_administrador->id_persona) ? $edit_administrador->id_persona : $edit_administrador["id_persona"]) == $persona->id_persona ? "selected":""}}>{{$persona->nombre}}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('id_persona')) {{--creacion de un span en caso de existir error--}}
                                                            <span class="text-danger">{{ $errors->first('id_persona') }}</span>
                                                        @endif
                                                    </div>

                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>

{{--script para lanzar el modal--}}
@push("scripts")
    <script type="text/javascript">
        new bootstrap.Modal(document.getElementById('modal-edit')).show();
    </script>
@endpush

