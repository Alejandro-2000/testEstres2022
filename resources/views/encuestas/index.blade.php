@extends("layouts.template")

@section("title_section")
    Encuestas
@endsection

@section("content")
    <div class="row mt-5">
        <div class="col">
            {{--<a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_agregar">Nuevo</a>--}}
        </div>
    </div>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre del Docente</th>
            <th scope="col">Edad</th>
            <th scope="col">Años Experiencia</th>
            <th scope="col">Antiguedad TESVB</th>
            <th scope="col">Numero de Hijos</th>
            <th scope="col">Docente Compartido</th>
            <th scope="col">Tiempo Traslado</th>
            <th scope="col">Horas Semana</th>
        </tr>
        </thead>
        <tbody>
        @foreach($datos_encuestas as $encuesta)
            <tr>
                <td scope="row">{{$loop->index+1}}</td>
                <td scope="row">{{$encuesta->nombre}}</td>
                <td scope="row">{{$encuesta->edad}}</td>
                <td scope="row">{{$encuesta->anos_experiencia}}</td>
                <td scope="row">{{$encuesta->antiguedad_tesvb}}</td>
                <td scope="row">{{$encuesta->num_hijos}}</td>
                <td scope="row">{{$encuesta->docente_compartido}}</td>
                <td scope="row">{{$encuesta->tiempo_traslado}}</td>
                <td scope="row">{{$encuesta->horas_semana}}</td>
                {{--<td>
                    {{--boton para editar primero debe conocer cual es el id que se desea editar entrando al metodo edit--}}
                   {{--<a href="{{route("encuestas.edit",$encuesta->id_encuesta)}}" class="btn btn-sm btn-success"><i class="far fa-edit"></i></a>
                </td>--}}
                <td>
                    {{--boton para editar primero debe conocer cual es el id que se desea editar entrando al metodo edit--}}
                    <a href="{{route("encuestas.show",$encuesta->id_encuesta)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        @endforeach
    </table>
    {{--incluir las vistas donde estan los datos--}}
    {{--@include("encuestas.create")

    @if(session("modal_edit"))
        @include("encuestas.edit")
    @endif
--}}
    @if(session("modal_delete"))
        @include("encuestas.delete")
    @endif

    {{--condicion para diferenciar los metodos agregar y editar--}}
    @if((Session::has("_old_input")))   {{--has compara si existe el parametro proporcionado--}}
    @if(array_key_exists("_method",Session::get("_old_input"))) {{--::get es una llamada a un metodo abstracto para sacar el valor del parametro que recibe--}}
    mensaje desde la validacion de editar
    {{--dd(session()->all())--}}
    @include("encuestas.edit")
    @else
        mensaje de validacion desde crear
        {{--recargar el modal si es que existe un error de validacion en algun dato--}}
        @section("scripts")
            <script type="text/javascript">
                new bootstrap.Modal(document.getElementById('modal_agregar')).show();
            </script>
        @endsection
    @endif
    @endif

@endsection

