@extends("layouts.template_user")

@section("title_section")
    TEST PARA CONOCER SU NIVEL DE ÉSTRES
@endsection

@section("content")
    {{--Aviso de privacidad--}}
    <div>
        <p>INSTRUCCIONES:<br></p>
        <p>Reciba un cordial saludo, mismo con el que aprovecho para presentarle una serie de preguntas sobre las cuales usted deberá indicar el nivel en el que se identifica de acuerdo con una escala de cuatro números, la cual se describe a continuación:
            <br><br>
            1 - En Desacuerdo<br>
            2 - Indiferente<br>
            3 – A veces<br>
            4 - Total Acuerdo<br>
            <br>
            Tenga en cuenta que no existen contestaciones buenas o malas, por lo cual es muy importante que sea sincero en sus respuestas. Los datos proporcionados serán utilizados solo con fines de investigación.

        </p>

    </div>

    {{--Preguntas de la encuesta--}}
    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">1.- Me cuesta tranquilizarme tras los contratiempos laborales.</legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">2.- Recurro al consumo de sustancias como tranquilizantes o fármacos para aliviar malestares (dolores de cabeza, falta de energía, cansancio, etc.)</legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">3.- A medida que avanza la jornada laboral siento más necesidad de que esta acabe. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">4.- Al pensar en el trabajo me pongo intranquilo.</legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">5.- Me entristezco demasiado ante los problemas laborales. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">6.- Tiendo a ser pesimista ante los problemas del trabajo. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">7.- En mis clases el clima de trabajo es desgastante. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">8.- Me siento triste con más frecuencia de lo que era normal en mí.</legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">9.- Los estudiantes no acatan mis indicaciones. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">10.- El salario del profesor es muy poco motivador. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">11.- Me inquieto con cuestiones laborales que realmente no son tan urgentes. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">12.- Me cuesta trabajo avanzar en la vida después de un fracaso. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">13.- En muchos momentos de la jornada laboral me noto tenso.</legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">14.- Tengo la sensación de estar destruyéndome.</legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">15.- El entorno en el que trabajo me resulta desagradable. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">16.- La carga laboral está alterando mis hábitos de sueño. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">17.- Me cuesta concentrarme cuando me pongo a trabajar. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">18.- La tensión laboral hace que use el baño con más frecuencia de lo normal. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">19.- Creo que los problemas laborales están afectando mi estado de salud físico. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">20.- Ante los problemas del trabajo noto que se altera mi respiración. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">21.- Hay tareas laborales que afronto con temor. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">22.- Me cuesta trabajo resolver los problemas que se presentan en el trabajo. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">23.- Mis relaciones sociales fuera del centro (familia, pareja, amigos, etc.) son muy buenas. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">24.- En el trabajo se dan situaciones de estrés que me provocan sudoración anormal. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">25.- No cuento con los medios necesarios para ejercer mi labores adecuadamente. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">26.- En el transcurso de la jornada laboral me falta energía para afrontar las labores en el trabajo </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">27.- El trabajo afecta negativamente otras facetas de mi vida. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">28.- Los problemas laborales me ponen agresivo.</legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">29.- La carga laboral está alterando mis hábitos alimenticios. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">30.- En el trabajo se dan situaciones de tensión que hacen que se me acelere el pulso. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">31.- La relación con mi familia es de conflicto. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">32.- No se respeta mi horario de trabajo. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">33.- La generación de reportes y/o evidencias me resulta tedioso. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend class="col-form-label col-sm-10 pt-3">34.- Algunas materias que se me asignan requieren de mi tiempo libre para su preparación. </legend>
            <div class="col-sm-10 pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
                    <label class="form-check-label" for="gridRadios1">
                        En desacuerdo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Indiferente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
                    <label class="form-check-label" for="gridRadios3">
                        A veces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
                    <label class="form-check-label" for="gridRadios4">
                        Total acuerdo
                    </label>
                </div>
            </div>
        </fieldset>
    </form>

    {{--Boton para enviar los datos--}}
    <div class="row mt-5">
        <div class="col">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_agregar">Enviar</a>
        </div>
    </div>

@endsection

