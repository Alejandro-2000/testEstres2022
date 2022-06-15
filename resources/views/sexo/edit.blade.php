<!-- Modal para actualizar registros-->
<div class="modal fade" id="modal-edit" role="dialog">
    <div class="modal-dialog">

    @php
        $edit_sexo = Session::has("edit_sexo") ? session("edit_sexo") : Session::get("_old_input");

    @endphp

    <!-- Modal content-->
        <form method="POST"  action="{{url('/sexo/'.(isset($edit_sexo->id_sexo) ? $edit_sexo->id_sexo : $edit_sexo["id_sexo"]))}}" role="form" enctype="multipart/form-data">
            <div class="modal-content">
                <input type="hidden" value="{{isset($edit_sexo->id_sexo) ? $edit_sexo->descripcion_sexo : $edit_sexo["id_sexo"]}}" name="id">
                {{--dd($edit_sexo)--}}
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
                                                    <label for="descripcion_sexo">Descripcion</label>
                                                    <input type="text" name="descripcion_sexo" value="{{isset($edit_sexo->descripcion_sexo) ? $edit_sexo->descripcion_sexo : $edit_sexo["descripcion_sexo"]}}" class="form-control{{$errors->has('descripcion_sexo') ? ' is-invalid' : ''}}" placeholder="Descripcion">
                                                    @if($errors->has('descripcion_sexo')) {{--creacion de un span en caso de existir error--}}
                                                    <span class="text-danger">{{ $errors->first('descripcion_sexo') }}</span>
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

