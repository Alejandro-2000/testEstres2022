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
            <th scope="col">ID Encuesta</th>
            <th scope="col">Pregunta</th>
            <th scope="col">Valor de la respuesta</th>
        </tr>
        </thead>
        <tbody>
        @foreach($datos_respuestas as $respuesta)
            <tr>
                <td scope="row">{{$loop->index+1}}</td>
                <td scope="row">{{$respuesta->id_encuesta}}</td>
                <td scope="row">{{$respuesta->enunciado_pregunta}}</td>
                <td scope="row">{{$respuesta->valor}}</td>
                {{--<td>
                    {{--boton para editar primero debe conocer cual es el id que se desea editar entrando al metodo edit--}}
                   {{--<a href="{{route("encuestas.edit",$encuesta->id_encuesta)}}" class="btn btn-sm btn-success"><i class="far fa-edit"></i></a>
                </td>--}}
                <td>
                    {{--boton para editar primero debe conocer cual es el id que se desea editar entrando al metodo edit--}}
                    <a href="{{route("respuestas.show",$respuesta->id_respuesta)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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
        @include("respuestas.delete")
    @endif

    {{--condicion para diferenciar los metodos agregar y editar--}}
    @if((Session::has("_old_input")))   {{--has compara si existe el parametro proporcionado--}}
    @if(array_key_exists("_method",Session::get("_old_input"))) {{--::get es una llamada a un metodo abstracto para sacar el valor del parametro que recibe--}}
    mensaje desde la validacion de editar
    {{--dd(session()->all())--}}
    @include("respuestas.edit")
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

