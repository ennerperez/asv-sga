<?php
    use Core\Language;
    use Core\View;
?>


<form class="form-horizontal" action="guardar" method="post" role="form">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="identificacion">
                    <h3>Identificación</h3>
                    <hr />
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textInput-DNI">DNI</label>
                        <div class="col-md-9">
                            <input type="text" id="textInput-DNI" name="dni" class="form-control" maxlength="25">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textInput-FirstName">Primer nombre</label>
                        <div class="col-md-9">
                            <input type="text" id="textInput-FirstName" name="nombre" class="form-control" maxlength="50">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textInput-SecondName">Segundo nombre</label>
                        <div class="col-md-9">
                            <input type="text" id="textInput-SecondName" name="nombre2" class="form-control" maxlength="50">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textInput-LastName">Primer apellido</label>
                        <div class="col-md-9">
                            <input type="text" id="textInput-LastName" name="apellido" class="form-control" maxlength="50">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textInput-SurName">Segundo apellido</label>
                        <div class="col-md-9">
                            <input type="text" id="textInput-SurName" name="apellido2" class="form-control" maxlength="50">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textInput-Brithdate">Nacimiento</label>
                        <div class="col-md-9">
                            <input type="date" id="textInput-Brithdate" name="nacimiento" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="input-Photo">Foto</label>
                        <div class="col-md-9">
                            <input id="input-foto" type="file" class="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="selectpicker-Status">Estado civil</label>
                        <div class="col-md-9">
                            <select id="selectpicker-Status" name="estado" class="selectpicker form-control">
                                <option value="0">Soltero</option>
                                <option value="1">Casado</option>
                                <option value="2">Divorciado</option>
                                <option value="3">Viudo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="selectpicker-Degree">Grado instrucción</label>
                        <div class="col-md-9">
                            <select id="selectpicker-Degree" name="instruccion" class="selectpicker form-control">
                                <option value="0">Ninguna</option>
                                <option value="1">Primaria</option>
                                <option value="2">Media</option>
                                <option value="3">Secundaria</option>
                                <option value="4">Técnica</option>
                                <option value="5">Superior</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="selectpicker-Religion">Religión</label>
                        <div class="col-md-9">
                            <select id="selectpicker-Religion" name="religion" class="selectpicker form-control">
                                <option>Ninguna</option>
                                <option>Adventista del séptimo día</option>
                                <option>Budista</option>
                                <option>Catolico</option>
                                <option>Cristiano</option>
                                <option>Evangelico</option>
                                <option>Hare Krisna</option>
                                <option>Judio</option>
                                <option>Luterano</option>
                                <option>Musulman</option>
                                <option>Prostestante</option>
                                <option>Santos de los últimos días</option>
                                <option>Testigo de Jehova</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textInput-Occupation">Ocupación</label>
                        <div class="col-md-9">
                            <input type="text" id="textInput-Occupation" name="ocupacion" class="form-control" maxlength="50">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="selectpicker-Country">Nacionalidad</label>
                        <div class="col-md-9">
                            <select id="selectpicker-Country" name="nacionalidad" class="selectpicker form-control">
                                <option value="VE">Venezolano</option>
                                <option value="">Extrangero</option>
                            </select>
                            <script>
                                //$(function () {
                                    //$('#selectpicker-Country').selectpicker();
                                //});
                            </script>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Genero</label>
                        <div class="col-md-9">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="genero" id="optionsRadios-Genre" value="0" checked="">
							Femenino
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="genero" id="optionsRadios-Genre" value="1">
							Masculino
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="contacto">
                    <h3>Contacto</h3>
                    <hr />
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textInput-Phone">Teléfono fijo</label>
                        <div class="col-md-9">
                            <input type="text" id="textInput-Phone" name="telefono" class="form-control" maxlength="25">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textInput-Mobile">Teléfono móvil</label>
                        <div class="col-md-9">
                            <input type="text" id="textInput-Mobile" name="movil" class="form-control" maxlength="25">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textInput-Fax">Fax</label>
                        <div class="col-md-9">
                            <input type="text" id="textInput-Fax" name="fax" class="form-control" maxlength="25">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textInput-Email">Correo</label>
                        <div class="col-md-9">
                            <input type="email" id="textInput-Email" name="correo" class="form-control" maxlength="50">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="selectpicker-State">Estado</label>
                        <div class="col-md-9">
                            <select id="selectpicker-State" class="selectpicker form-control">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="selectpicker-Town">Municipio</label>
                        <div class="col-md-9">
                            <select id="selectpicker-Town" name="municipio" class="selectpicker form-control">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="selectpicker-Parish">Parroquia</label>
                        <div class="col-md-9">
                            <select id="selectpicker-Parish" name="parroquia" class="selectpicker form-control">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textInput-Address">Dirección</label>
                        <div class="col-md-9">
                            <textarea rows="3" id="textInput-Address" name="direccion" class="form-control" maxlength="255"></textarea>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="asociacion">
                    <h3>Registro</h3>
                    <hr />
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="selectpicker-Region">Región</label>
                        <div class="col-md-9">
                            <select id="selectpicker-Region" name="region" class="selectpicker form-control">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="selectpicker-Distrito">Distrito</label>
                        <div class="col-md-9">
                            <select id="selectpicker-Distrito" name="distrito" class="selectpicker form-control">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="selectpicker-Grupo">Grupo</label>
                        <div class="col-md-9">
                            <select id="selectpicker-Grupo" name="grupo" class="selectpicker form-control">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textInput-Promesa">Promesa</label>
                        <div class="col-md-9">
                            <input type="date" id="textInput-Promesa" name="registro" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="selectpicker-Cargo">Cargo</label>
                        <div class="col-md-9">
                            <select id="selectpicker-Cargo" name="cargo" class="selectpicker form-control">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textInput-FechaComienzo">Desde</label>
                        <div class="col-md-9">
                            <input type="date" id="textInput-FechaComienzo" name="fechacomienzo" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textInput-FechaHasta">Hasta</label>
                        <div class="col-md-9">
                            <input type="date" id="textInput-FechaHasta" name="fechahasta" class="form-control" />
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="capacitacion">
                    <h3>Capacitación</h3>
                    <hr />
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textInput-APF">Asesor personal de formación</label>
                        <div class="col-md-9">
                            <input type="text" id="textInput-APF" name="apf" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textInput-APF">Nivel básico</label>
                        <div class="col-md-9">
                            <div class="checkbox" style="padding-left: 16px;">
                                    <label>
                                        <input type="checkbox">Sí
                                    </label>
                                </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="selectpicker-Unidades">Unidades</label>
                        <div class="col-md-9">
                            <select id="selectpicker-Unidades" name="unidades" class="selectpicker form-control">
                                <option>Ninguno</option>
                                <option>Intermedio</option>
                                <option>Avanzado</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="selectpicker-Conductores">Conductores</label>
                        <div class="col-md-9">
                            <select id="selectpicker-Conductores" name="conductores" class="selectpicker form-control">
                                <option>Ninguno</option>
                                <option>Intermedio</option>
                                <option>Avanzado</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="selectpicker-Institucional">Institucional</label>
                        <div class="col-md-9">
                            <select id="selectpicker-Institucional" name="institucional" class="selectpicker form-control">
                                <option>Ninguno</option>
                                <option>Intermedio</option>
                                <option>Avanzado</option>
                            </select>
                        </div>
                    </div>

                                            <!--<div class="form-group">
                                                                                                                        <label class="col-md-3 control-label" for="textInput-APF">Asesor personal de formación</label>
                                                                                                                        <div class="col-md-9">
                                                                                                                            <input type="text" id="textInput-APF" name="apf" class="form-control" />
                                                                                                                        </div>
                                                                                                                    </div>-->
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                    <button type="submit" class="btn btn-primary" name="submit">Guardar</button>
                    <button type="button" class="btn btn-default">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</form>


<script>

    $(document).ready(function () {
        fillRegiones();
        fillCargos();
    });
    
    $("#selectpicker-Region").change(function () {
        fillDistritos();
        fillCargos();
    });
    
    $("#selectpicker-Distrito").change(function () {
        fillGrupos();
        fillCargos();
    });
    
    $("#selectpicker-Grupo").change(function () {
        fillCargos();
    });
    
    function fillRegiones() {
        $.getJSON("../get/regiones").done(function (data) {
            var picker = $("#selectpicker-Region");
            picker.empty();
            $.each(data, function () {
                picker.append($("<option />").val(this.id).text(this.nombre));
            });
            fillDistritos();
        });
    }
    
    function fillDistritos() {
        $.getJSON("../get/distritos").done(function (data) {
            var picker = $("#selectpicker-Distrito");
            picker.empty();
            picker.append($("<option />").val(0).text("Ninguno"));
            var matchVal = $("#selectpicker-Region option:selected").val();
            data.filter(function (item) {
                if (item.region == matchVal) {
                    picker.append($("<option />").val(item.id).text(item.nombre));
                }
            });
            fillGrupos();
        });
    }
    
    function fillGrupos() {
        $.getJSON("../get/grupos").done(function (data) {
            var picker = $("#selectpicker-Grupo");
            picker.empty();
            picker.append($("<option />").val(0).text("Ninguno"));
            var matchVal = $("#selectpicker-Distrito option:selected").val();
            data.filter(function (item) {
                if (item.distrito == matchVal) {
                    picker.append($("<option />").val(item.id).text(item.nombre));
                }
            });
        });
    }
    
    function fillCargos() {
    
        var nivel = "regiones";
    
        if ($("#selectpicker-Distrito option:selected").val() > 0) {
            nivel = "distritos";
        }
    
        if ($("#selectpicker-Grupo option:selected").val() > 0) {
            nivel = "grupos";
        }
    
        var source = "../get/" + nivel + "/cargos";
    
        $.getJSON(source).done(function (data) {
            var picker = $("#selectpicker-Cargo");
            picker.empty();
            picker.append($("<option />").val(0).text("Ninguno"));
            $.each(data, function () {
                picker.append($("<option />").val(this.id).text(this.nombre));
            });
        });
    
    }
    
</script>