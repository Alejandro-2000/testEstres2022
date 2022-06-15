<!-- Modal para insertar datos-->
<div class="modal fade" id="modal_agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('docentes.store') }}"  role="form" enctype="multipart/form-data">
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
                                <select name="id_persona" class="form-control{{$errors->has('id_persona') ? ' is-invalid' : ''}}">
                                    <option value="" selected disabled>Selecciona un valor</option>

                                    @foreach($datos_personas as $persona)
                                        <option value="{{$persona->id_persona}}">{{$persona->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="carrera">Programa de Estudio</label>
                                <select name="id_carrera" class="form-control{{$errors->has('id_carrera') ? ' is-invalid' : ''}}">
                                    <option value="" selected disabled>Selecciona un valor</option>

                                    @foreach($datos_programa as $carrera)
                                        <option value="{{$carrera->id_programa}}">{{$carrera->descripcion_carrera}}</option>
                                    @endforeach
                                </select>
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
