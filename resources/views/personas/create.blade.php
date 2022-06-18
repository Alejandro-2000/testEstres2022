<!-- Modal para insertar datos-->
<div class="modal fade" id="modal_agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('personas.store') }}"  role="form" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="box box-info padding-1">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" class="form-control{{$errors->has('nombre') ? ' is-invalid' : ''}}" placeholder="Nombre">
                                @if($errors->has('nombre')) {{--creacion de un span en caso de existir error--}}
                                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="estado_civil">Estado Civil</label>
                                <select name="id_estadocivil" class="form-control{{$errors->has('id_estadocivil') ? ' is-invalid' : ''}}" placeholder="Estado Civil">
                                    <option value="" selected disabled>Selecciona un valor</option>

                                    @foreach($datos_estadocivil as $estado_civil)
                                        <option value="{{$estado_civil->id_estadocivil}}">{{$estado_civil->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="sexo">Sexo</label>
                                <select name="id_sexo" class="form-control{{$errors->has('id_sexo') ? ' is-invalid' : ''}}">
                                    <option value="" selected disabled>Selecciona un valor</option>

                                    @foreach($datos_sexo as $sexo)
                                        <option value="{{$sexo->id_sexo}}">{{$sexo->descripcion_sexo}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="gradoacademico">Grado Academico</label>
                                <select name="id_gradoacad" class="form-control{{$errors->has('id_gradoacad') ? ' is-invalid' : ''}}">
                                    <option value="" selected disabled>Selecciona un valor</option>

                                    @foreach($datos_gradoacad as $grado)
                                        <option value="{{$grado->id_gradoacad}}">{{$grado->enunciado}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="correo">Correo</label>
                                <input type="email" name="correo" class="form-control{{$errors->has('correo') ? ' is-invalid' : ''}}" placeholder="Correo">
                                @if($errors->has('correo')) {{--creacion de un span en caso de existir error--}}
                                    <span class="text-danger">{{ $errors->first('correo') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" class="form-control{{$errors->has('password') ? ' is-invalid' : ''}}" placeholder="Contraseña">
                                @if($errors->has('password')) {{--creacion de un span en caso de existir error--}}
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
