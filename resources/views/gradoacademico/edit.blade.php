<!-- Modal para actualizar registros-->
<div class="modal fade" id="modal-edit" role="dialog">
    <div class="modal-dialog">

    @php
        $edit_gradoacademico = Session::has("edit_gradoacademico") ? session("edit_gradoacademico") : Session::get("_old_input");
    @endphp

    <!-- Modal content-->
        <form method="POST"  action="{{url('/gradoacademico/'.(isset($edit_gradoacademico->id_gradoacad) ? $edit_gradoacademico->id_gradoacad : $edit_gradoacademico["id_gradoacad"]))}}" role="form" enctype="multipart/form-data">
            <div class="modal-content">
                <input type="hidden" value="{{isset($edit_gradoacademico->id_gradoacad) ? $edit_gradoacademico->enunciado : $edit_gradoacademico["id_gradoacad"]}}" name="id">
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
                                                    <label for="enunciado">Descripcion</label>
                                                    <input type="text" name="enunciado" value="{{isset($edit_gradoacademico->enunciado) ? $edit_gradoacademico->enunciado : $edit_gradoacademico["enunciado"]}}" class="form-control{{$errors->has('enunciado') ? ' is-invalid' : ''}}" placeholder="Descripcion">
                                                    @if($errors->has('enunciado')) {{--creacion de un span en caso de existir error--}}
                                                    <span class="text-danger">{{ $errors->first('enunciado') }}</span>
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

