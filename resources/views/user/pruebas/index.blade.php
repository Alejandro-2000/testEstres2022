@extends("layouts.template_user")

@section("title_section")
    ENCUESTA SOBRE INFORMACIÓN LABORAL
@endsection

@section("content")

    {{--Aviso de privacidad--}}
    <div>
        <p>AVISO DE PRIVACIDAD<br><br>
            La información que se recopilará a continuación no será compartida con terceros y solamente se trabajará con los resultados obtenidos a partir de los resultados obtenidos. El encuestado, al rellenar el formulario siguiente con los datos solicitados y aceptar su envío, AUTORIZA EXPRESAMENTE al encuestador para que trate e incorpore en documentos de investigación de su propiedad aquellos datos facilitados en el mencionado formulario, así como todos los datos que se generen en relación con los mismos. En dicho sentido, queda informado del tratamiento a que van a ser sometidos todos sus datos a los que el encuestador tenga acceso como consecuencia del llenado del formulario.<br><br>
            La información solicitada permite al encuestador recabar información veraz sobre el tema tratado en el cuestionario siguiente. La información solicitada será utilizada con el único propósito de ser analizada estadísticamente para su posterior publicación parcial en artículos de carácter científico. En ningún momento de la recolección, tratamiento y publicación de artículos se verá vulnerada la identidad del encuestado, toda vez que el cuestionario garantiza el ANONIMATO de este.<br><br>
        </p>
        <p>INSTRUCCIONES:<br>Seleccione la respuesta que usted considere conveniente.</p>
    </div>


    {{--Preguntas de la encuesta--}}
    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">1. Edad</legend>
            <div class="col-sm-5 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                    <label class="form-check-label" for="gridRadios1">
                        35 años o menos
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        45 años o menos
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                    <label class="form-check-label" for="gridRadios3">
                        45 años o más
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">2. Años de experiencia como docente</legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                    <label class="form-check-label" for="gridRadios1">
                        Sin experiencia
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Menos de 5 años
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                    <label class="form-check-label" for="gridRadios3">
                        5 años o más
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">3. Antiguedad en el TESVB</legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                    <label class="form-check-label" for="gridRadios1">
                        2 años o menos
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        3 a 5 años
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                    <label class="form-check-label" for="gridRadios3">
                        Más de 5 años
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">4. Número de Hijos</legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                    <label class="form-check-label" for="gridRadios1">
                        Ninguno
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        1 a 2 hijos
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                    <label class="form-check-label" for="gridRadios3">
                        3 hijos o más
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">5. Imparte clases en más de un programa de estudio</legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                    <label class="form-check-label" for="gridRadios1">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        No
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">6. Tiempo de traslado desde mi hogar al Tecnológico </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                    <label class="form-check-label" for="gridRadios1">
                        30 minutos o menos
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        30 minutos a 1 hora
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                    <label class="form-check-label" for="gridRadios3">
                        Más de 1 hora
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">7. Número de horas clase impartidas a la semana </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                    <label class="form-check-label" for="gridRadios1">
                        Menos de 20 horas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        De 21 a 30 horas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                    <label class="form-check-label" for="gridRadios3">
                        De 31 a 40 horas
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    {{--Boton para enviar las respuestas--}}
    <div class="row mt-5">
        <div class="col">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_agregar">Enviar</a>
        </div>
    </div>

@endsection

