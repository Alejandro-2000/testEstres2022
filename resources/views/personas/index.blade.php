@extends("layouts.template")

@section("title_section")
    Personas
@endsection

@section("content")
    <div class="row mt-5">
        <div class="col">
            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#crearPersonaModel">Nuevo</a>
        </div>

        <div class="row mt-5 p-2">
            <div class="col">

                <table class="table">
                    <thead class="thead-ligth">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Estado Civil</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Correo</th>
                        </tr>
                    </thead>
                    <body>
                        @foreach($datos_personas as $persona)
                            <tr>
                                <td scope="row">{{$loop->index+1}}</th>
                                <td scope="row">{{$persona->nombre}}</th>
                                <td scope="row">{{$persona->apellidos}}</th>
                                <td scope="row">{{$persona->estado_civil}}</th>
                                <td scope="row">{{$persona->direccion}}</th>
                                <td scope="row">{{$persona->correo}}</th>
                            </tr>
                        @endforeach
                    </body>
                </table>
            </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="crearPersonaModal">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection