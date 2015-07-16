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

<script>
    
    $("#input-Foto").fileinput({
        language: "<?php echo LANGUAGE_CODE; ?>",
        showUpload: false
    });

    $(document).ready(function () {
        fillCreencias();
        fillOcupaciones();
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
	
</script>