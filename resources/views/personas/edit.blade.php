<!-- Modal para actualizar registros-->
<div class="modal fade" id="modal-edit" role="dialog">
    <div class="modal-dialog">

        @php
            //$edit_persona = session("edit_persona");
            $edit_persona = Session::has("edit_persona") ? session("edit_persona") : Session::get("_old_input");
        @endphp

        <!-- Modal content-->
        <form method="POST"  action="{{url('/personas/'.(isset($edit_persona->id_persona) ? $edit_persona->id_persona : $edit_persona["id_persona"]))}}" role="form" enctype="multipart/form-data">
            <div class="modal-content">
                <input type="hidden" value="{{isset($edit_persona->id_persona) ? $edit_persona->nombre : $edit_persona["id_persona"]}}" name="id_persona">
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
                                                        <input type="text" name="nombre" value="{{isset($edit_persona->nombre) ? $edit_persona->nombre : $edit_persona["nombre"]}}" class="form-control{{$errors->has('nombre') ? ' is-invalid' : ''}}" placeholder="Nombre">
                                                        @if($errors->has('nombre')) {{--creacion de un span en caso de existir error--}}
                                                            <span class="text-danger">{{ $errors->first('nombre') }}</span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="estado_civil">Estado Civil</label>
                                                        <select name="id_estadocivil" class="form-control{{$errors->has('id_estadocivil') ? ' is-invalid' : ''}}">
                                                            <option value="" selected disabled>Selecciona un valor</option>

                                                            @foreach($datos_estadocivil as $estado_civil)
                                                                <option value="{{$estado_civil->id_estadocivil}}" {{(isset($edit_persona->id_estadocivil) ? $edit_persona->id_estadocivil : $edit_persona["id_estadocivil"]) == $estado_civil->id_estadocivil ? "selected":""}}>{{$estado_civil->descripcion}}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('id_estadocivil')) {{--creacion de un span en caso de existir error--}}
                                                            <span class="text-danger">{{ $errors->first('id_estadocivil') }}</span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="sexo">Sexo</label>
                                                        <select name="id_sexo" class="form-control{{$errors->has('id_sexo') ? ' is-invalid' : ''}}">
                                                            <option value="" selected disabled>Selecciona un valor</option>

                                                            @foreach($datos_sexo as $sexo)
                                                                <option value="{{$sexo->id_sexo}}" {{(isset($edit_persona->id_sexo) ? $edit_persona->id_sexo : $edit_persona["id_sexo"]) == $sexo->id_sexo ? "selected":""}}>{{$sexo->descripcion_sexo}}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('id_sexo')) {{--creacion de un span en caso de existir error--}}
                                                        <span class="text-danger">{{ $errors->first('id_sexo') }}</span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="gradoacademico">Grado Academico</label>
                                                        <select name="id_gradoacad" class="form-control{{$errors->has('id_gradoacad') ? ' is-invalid' : ''}}">
                                                            <option value="" selected disabled>Selecciona un valor</option>

                                                            @foreach($datos_gradoacad as $grado)
                                                                <option value="{{$grado->id_gradoacad}}" {{(isset($edit_persona->id_gradoacad) ? $edit_persona->id_gradoacad : $edit_persona["id_gradoacad"]) == $grado->id_gradoacad ? "selected":""}}>{{$grado->enunciado}}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('id_gradoacad')) {{--creacion de un span en caso de existir error--}}
                                                        <span class="text-danger">{{ $errors->first('id_gradoacad') }}</span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="correo">Correo</label>
                                                        <input type="text" name="correo" value="{{isset($edit_persona->correo) ? $edit_persona->correo : $edit_persona["correo"]}}" class="form-control{{$errors->has('correo') ? ' is-invalid' : ''}}" placeholder="Correo">
                                                        @if($errors->has('correo')) {{--creacion de un span en caso de existir error--}}
                                                            <span class="text-danger">{{ $errors->first('correo') }}</span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password">Contraseña</label>
                                                        <input type="password" name="password" value="{{isset($edit_persona->password) ? $edit_persona->password : $edit_persona["password"]}}" class="form-control{{$errors->has('password') ? ' is-invalid' : ''}}" placeholder="Contraseña">
                                                        @if($errors->has('password')) {{--creacion de un span en caso de existir error--}}
                                                            <span class="text-danger">{{ $errors->first('password') }}</span>
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

