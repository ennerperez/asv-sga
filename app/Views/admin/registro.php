<?php
    use Core\Language;
    use Core\View;
    
    use Helpers\Session;
    use Helpers\Assets;
    use Helpers\Url;
    use Helpers\Hooks;
    //initialise hooks
    $hooks = Hooks::get();

    switch (ENVIRONMENT) {
         case 'development':
            Assets::css(array( Url::templatePath(). 'css/fileinput.css'));
            Assets::js(array( Url::templatePath() . 'js/fileinput.js', 
                              Url::templatePath() . 'js/language/fileinput_locale_'.LANGUAGE_CODE.'.js'));
            break;
         default:
            Assets::css(array( Url::templatePath(). 'css/fileinput.min.css'));
            Assets::js(array( Url::templatePath() . 'js/fileinput.min.js', 
                              Url::templatePath() . 'js/language/fileinput_locale_'.LANGUAGE_CODE.'.js'));
            break;
     }
         
    $hooks->run('css');
    $hooks->run('js');
    
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-header page-header-bleed-right">
                <h4>Registro inicial</h4>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div id="alert" class="alert alert-danger" role="alert">Lamentablemente es necesario que complete la información previa para acceder al sistema.</div>
                </div>
                <div class="col-xs-10 col-xs-offset-1">
                    <form class="form-horizontal" action="guardar" method="post" role="form">
                        <div class="collapse fade in" id="collapseRegistro1">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="container-fluid">
                                        <h3>Identificación</h3>
                                        <hr />
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="textInput-Identificacion">Identificación</label>
                                            <div class="col-md-9">
                                                <input type="text" id="textInput-Identificacion" name="dni" class="form-control" maxlength="25">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="textInput-Nombre">Nombres</label>
                                            <div class="col-md-5">
                                                <input type="text" id="textInput-Nombre" name="nombre" class="form-control" maxlength="50">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="textInput-Nombre2" name="nombre2" class="form-control" maxlength="50">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="textInput-Apellido">Apellidos</label>
                                            <div class="col-md-5">
                                                <input type="text" id="textInput-Apellido" name="apellido" class="form-control" maxlength="50">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="textInput-Apellido2" name="apellido2" class="form-control" maxlength="50">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="textInput-Nacimiento">Nacimiento</label>
                                            <div class="col-md-9">
                                                <input type="date" id="textInput-Nacimiento" name="nacimiento" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="input-Foto">Foto</label>
                                            <div class="col-md-9">
                                                <input id="input-Foto" type="file" class="file">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="selectPicker-EstadoCivil">Estado civil</label>
                                            <div class="col-md-9">
                                                <select id="selectPicker-EstadoCivil" name="estado" class="selectpicker form-control">
                                                    <option value="0">Soltero</option>
                                                    <option value="1">Casado</option>
                                                    <option value="2">Divorciado</option>
                                                    <option value="3">Viudo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="selectPicker-Instruccion">Instrucción</label>
                                            <div class="col-md-9">
                                                <select id="selectPicker-Instruccion" name="instruccion" class="selectpicker form-control">
                                                    <option value="0">Ninguna</option>
                                                    <option value="1">Primaria</option>
                                                    <option value="1.5">Media</option>
                                                    <option value="2">Secundaria</option>
                                                    <option value="2.5">Técnica</option>
                                                    <option value="3">Superior</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="selectPicker-Creencia">Creencia</label>
                                            <div class="col-md-9">
                                                <select id="selectPicker-Creencia" name="creencia" class="selectpicker form-control">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="selectPicker-Ocupacion">Ocupación</label>
                                            <div class="col-md-9">
                                                 <select id="selectPicker-Ocupacion" name="ocupacion" class="selectpicker form-control">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="selectPicker-Nacionalidad">Nacionalidad</label>
                                            <div class="col-md-9">
                                                <select id="selectPicker-Nacionalidad" name="nacionalidad" class="selectpicker form-control">
                                                    <option value="VE">Venezolano</option>
                                                    <option value="XX">Extranjero</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Genero</label>
                                            <div class="col-md-9">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="genero" id="optionsRadio-Genero" value="0" checked="">Femenino
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="genero" id="optionsRadio-Genero" value="1">Masculino
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a class="btn btn-primary" type="button" href="#alert" data-toggle="collapse" data-target="#collapseRegistro1,#collapseRegistro2" aria-expanded="false">Siguiente</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse fade" id="collapseRegistro2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="container-fluid">
                                        <h3>Contacto</h3>
                                        <hr />
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="textInput-Telefono">Teléfono fijo</label>
                                            <div class="col-md-9">
                                                <input type="text" id="textInput-Telefono" name="telefono" class="form-control" maxlength="25">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="textInput-Movil">Teléfono móvil</label>
                                            <div class="col-md-9">
                                                <input type="text" id="textInput-Movil" name="movil" class="form-control" maxlength="25">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="textInput-Fax">Fax</label>
                                            <div class="col-md-9">
                                                <input type="text" id="textInput-Fax" name="fax" class="form-control" maxlength="25">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="textInput-Correo">Correo</label>
                                            <div class="col-md-9">
                                                <input type="email" id="textInput-Correo" name="correo" class="form-control" maxlength="50">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="selectPicker-Estado">Estado</label>
                                            <div class="col-md-9">
                                                <select id="selectPicker-Estado" class="selectpicker form-control">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="selectPicker-Municipio">Municipio</label>
                                            <div class="col-md-9">
                                                <select id="selectPicker-Municipio" name="municipio" class="selectpicker form-control">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="selectPicker-Parroquia">Parroquia</label>
                                            <div class="col-md-9">
                                                <select id="selectPicker-Parroquia" name="parroquia" class="selectpicker form-control">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="textInput-Direccion">Dirección</label>
                                            <div class="col-md-9">
                                                <textarea rows="3" id="textInput-Direccion" name="direccion" class="form-control" maxlength="255"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a class="btn btn-default" type="button" href="#alert" data-toggle="collapse" data-target="#collapseRegistro1,#collapseRegistro2" aria-expanded="false">Anterior</a>
                                            <a class="btn btn-primary" type="button" href="#alert" data-toggle="collapse" data-target="#collapseRegistro2,#collapseRegistro3" aria-expanded="false">Siguiente</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse fade" id="collapseRegistro3">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="container-fluid">
                                        <h3>Registro</h3>
                                        <hr />
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="selectPicker-Region">Región</label>
                                            <div class="col-md-9">
                                                <select id="selectPicker-Region" name="region" class="selectpicker form-control">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="selectPicker-Distrito">Distrito</label>
                                            <div class="col-md-9">
                                                <select id="selectPicker-Distrito" name="distrito" class="selectpicker form-control">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="selectPicker-Grupo">Grupo</label>
                                            <div class="col-md-9">
                                                <select id="selectPicker-Grupo" name="grupo" class="selectpicker form-control">
                                                </select>
                                            </div>
                                        </div>
                                        <!--<div class="form-group">
                                            <label class="col-md-2 control-label" for="textInput-Promesa">Promesa</label>
                                            <div class="col-md-9">
                                                <input type="date" id="textInput-Promesa" name="registro" class="form-control" />
                                            </div>
                                        </div>-->
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="selectPicker-Cargo">Cargo</label>
                                            <div class="col-md-9">
                                                <select id="selectPicker-Cargo" name="cargo" class="selectpicker form-control">
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
                                </div>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a class="btn btn-default" type="button" href="#alert" data-toggle="collapse" data-target="#collapseRegistro2,#collapseRegistro3" aria-expanded="false">Anterior</a>
                                            <a class="btn btn-primary" type="button" href="#alert" data-toggle="collapse" data-target="#collapseRegistro3,#collapseRegistro4" aria-expanded="false">Siguiente</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse fade" id="collapseRegistro4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="container-fluid">
                                        <h3>Grupo Scout</h3>
                                        <hr />
                                        
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a class="btn btn-default" type="button" href="#alert" data-toggle="collapse" data-target="#collapseRegistro3,#collapseRegistro4" aria-expanded="false">Anterior</a>
                                            <a class="btn btn-primary" type="button" href="#alert" data-toggle="collapse" data-target="#collapseRegistro4,#collapseRegistro5" aria-expanded="false">Siguiente</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse fade" id="collapseRegistro5">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="container-fluid">
                                        <h3>Cuenta</h3>
                                        <hr />
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="textInput-Clave">Contraseña</label>
                                            <div class="col-md-9">
                                                <input type="password" id="textInput-Clave" name="clave" class="form-control" maxlength="25">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="textInput-Clave2">Confirmar</label>
                                            <div class="col-md-9">
                                                <input type="password" id="textInput-Clave2" name="clave2" class="form-control" maxlength="25">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a class="btn btn-default" type="button" href="#alert" data-toggle="collapse" data-target="#collapseRegistro4,#collapseRegistro5" aria-expanded="false">Anterior</a>
                                            <a class="btn btn-primary" type="button" href="#alert" data-toggle="collapse" data-target="#collapseRegistro5,#collapseRegistro6" aria-expanded="false">Siguiente</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse fade" id="collapseRegistro6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="container-fluid">
                                        <h3>Confirmar</h3>
                                        <hr />
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="checkbox" style="  padding-left: 15px;">
                                                    <label>
                                                        <input type="checkbox">Confirmo que la información suministrada es correcta.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a class="btn btn-default" type="button" href="#alert" data-toggle="collapse" data-target="#collapseRegistro6,#collapseRegistro5" aria-expanded="false">Anterior</a>
                                            <button class="btn btn-primary" type="button" aria-expanded="false">Finalizar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    function getIdMiembros(){
        if (Session::get('loggin') == true)
        {
            return array(Session::get('userdata')->region, Session::get('userdata')->distrito, Session::get('userdata')->grupo);
        }
    }
?>

<script>
    
    $('body').addClass('scouts-dashboard');
    $("#input-foto").fileinput({
        language: "<?php echo LANGUAGE_CODE; ?>",
        showUpload: false
    });

    $(document).ready(function () {
        fillCreencias();
        fillOcupaciones();
        fillEstados();
        fillRegiones();

    });

    $("#selectPicker-Estado").change(function () {
        fillMunicipios();
    });

    $("#selectPicker-Municipio").change(function () {
        fillParroquias();
    });

    $("#selectPicker-Region").change(function () {
        fillDistritos();
        fillCargos();
    });
    
    $("#selectPicker-Distrito").change(function () {
        fillGrupos();
        fillCargos();
    });
    
    $("#selectPicker-Grupo").change(function () {
        fillCargos();
    });

    function fillCreencias() {
        $.getJSON("../api/v1/get/creencias").done(function (data) {
            var picker = $("#selectPicker-Creencia");
            picker.empty();
            $.each(data, function () {
                picker.append($("<option />").val(this.nombre).text(this.nombre));
            });
        });
    }

    function fillOcupaciones() {
        $.getJSON("../api/v1/get/ocupaciones").done(function (data) {
            var picker = $("#selectPicker-Ocupacion");
            picker.empty();
            $.each(data, function () {
                picker.append($("<option />").val(this.nombre).text(this.nombre));
            });
        });
    }

    function fillEstados() {
        $.getJSON("../data/geonames/?s=ADM1").done(function (data) {
            var picker = $("#selectPicker-Estado");
            picker.empty();
            $.each(data, function () {
                picker.append($("<option />").val(this.admin1).text(this.name.replace("Estado ", "")));
            });
            fillMunicipios();
        });
    }

    function fillMunicipios() {
        var matchVal = $("#selectPicker-Estado option:selected").val();
        var url = "../data/geonames/?s=ADM2&a1=" + matchVal;
        $.getJSON(url).done(function (data) {
            var picker = $("#selectPicker-Municipio");
            picker.empty();
            $.each(data, function () {
                picker.append($("<option />").val(this.admin2).text(this.name.replace("Municipio ", "")));
            });
            fillParroquias();
        });
    }

    function fillParroquias() {
        var matchVal = $("#selectPicker-Municipio option:selected").val();
        var url = "../data/geonames/?s=ADM3&a2=" + matchVal;
        $.getJSON(url).done(function (data) {
            var picker = $("#selectPicker-Parroquia");
            picker.empty();
            $.each(data, function () {
                picker.append($("<option />").val(this.admin3).text(this.name.replace("Parroquia ", "")));
            });
        }).error(function(){
            var picker = $("#selectPicker-Parroquia");
            picker.empty();
            picker.append($("<option />").val(0).text("Ninguna"));
        });
    }

    function fillRegiones() {
        $.getJSON("../api/v1/get/regiones").done(function (data) {
            var picker = $("#selectPicker-Region");
            picker.empty();
            $.each(data, function () {
                picker.append($("<option />").val(this.id).text(this.nombre));
            });
            fillDistritos();
            fillCargos();
            picker.val(<?php echo getIdMiembros()[0]; ?>);

        });
    }

    function fillDistritos() {
        $.getJSON("../api/v1/get/distritos").done(function (data) {
            var picker = $("#selectPicker-Distrito");
            picker.empty();
            picker.append($("<option />").val(0).text("Ninguno"));
            var matchVal = $("#selectPicker-Region option:selected").val();
            data.filter(function (item) {
                if (item.region == matchVal) {
                    picker.append($("<option />").val(item.id).text(item.nombre));
                }
            });
            fillGrupos();
            fillCargos();
            picker.val(<?php echo getIdMiembros()[1]; ?>);

        });
    }

    function fillGrupos() {
        $.getJSON("../api/v1/get/grupos").done(function (data) {
            var picker = $("#selectPicker-Grupo");
            picker.empty();
            picker.append($("<option />").val(0).text("Ninguno"));
            var matchVal = $("#selectPicker-Distrito option:selected").val();
            data.filter(function (item) {
                if (item.distrito == matchVal) {
                    picker.append($("<option />").val(item.id).text(item.nombre));
                }
            fillCargos();
            picker.val(<?php echo getIdMiembros()[2]; ?>);

            });
        });
    }

    function fillCargos() {
    
        var nivel = "regiones";
    
        if ($("#selectPicker-Distrito option:selected").val() > 0) {
            nivel = "distritos";
        }
    
        if ($("#selectPicker-Grupo option:selected").val() > 0) {
            nivel = "grupos";
        }
    
        var source = "../api/v1/get/" + nivel + "/?cargos";
    
        $.getJSON(source).done(function (data) {
            var picker = $("#selectPicker-Cargo");
            picker.empty();
            picker.append($("<option />").val(0).text("Ninguno"));
            $.each(data, function () {
                picker.append($("<option />").val(this.id).text(this.nombre));
            });
        });
    
    }

</script>