@extends("layouts.template")

@section("title_section")
    Preguntas
@endsection

@section("content")
    <div class="row mt-5">
        <div class="col">
            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_agregar">Nuevo</a>
        </div>
    </div>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Estado Civil</th>
            <th scope="col">Sexo</th>
            <th scope="col">Grado Academico</th>
            <th scope="col">Correo</th>
        </tr>
        </thead>
        <tbody>
        @foreach($datos_personas as $persona)
            <tr>
                <td scope="col">{{$loop->index+1}}</th>
                <td scope="col">{{$persona->nombre}}</th>
                <td scope="col">{{$persona->descripcion}}</th>
                <td scope="col">{{$persona->descripcion_sexo}}</th>
                <td scope="col">{{$persona->enunciado}}</th>
                <td scope="col">{{$persona->correo}}</th>
                <td>
                <td>
                    {{--boton para editar primero debe conocer cual es el id que se desea editar entrando al metodo edit--}}
                    <a href="{{route("personas.edit",$persona->id_persona)}}" class="btn btn-sm btn-success"><i class="far fa-edit"></i></a>
                </td>
                <td>
                    {{--boton para editar primero debe conocer cual es el id que se desea editar entrando al metodo edit--}}
                    <a href="{{route("personas.show",$persona->id_persona)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        @endforeach
    </table>
    {{--incluir las vistas donde estan los datos--}}
    @include("personas.create")

    @if(session("modal_edit"))
        @include("personas.edit")
    @endif

    @if(session("modal_delete"))
        @include("personas.delete")
    @endif

    {{--condicion para diferenciar los metodos agregar y editar--}}
    @if((Session::has("_old_input")))   {{--has compara si existe el parametro proporcionado--}}
    @if(array_key_exists("_method",Session::get("_old_input"))) {{--::get es una llamada a un metodo abstracto para sacar el valor del parametro que recibe--}}
    mensaje desde la validacion de editar
    {{--dd(session()->all())--}}
    @include("personas.edit")
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

