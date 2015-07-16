<?php
    
	use Core\Language;
    use Core\View;
    
    use Helpers\Session;
    use Helpers\Assets;
    use Helpers\Url;
	
?>

<div class="container-fluid">
    <h3>Grupo Scout</h3>
    <hr />
    <div class="form-group">
        <label class="col-md-2 control-label" for="textInput-Estructura-Codigo">Código</label>
        <div class="col-md-9">
            <input type="text" id="textInput-Estructura-Codigo" name="codigo" class="form-control" maxlength="25">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="textInput-Estructura-Nombre">Nombre</label>
        <div class="col-md-9">
            <input type="text" id="textInput-Estructura-Nombre" name="nombre" class="form-control" maxlength="50">
        </div>
    </div>
	<div class="form-group">
        <label class="col-md-2 control-label" for="textInput-Estructura-Descripcion">Descripción</label>
        <div class="col-md-9">
            <input type="text" id="textInput-Estructura-Descripcion" name="nombre" class="form-control" maxlength="50">
        </div>
    </div>
	<div class="form-group">
        <label class="col-md-2 control-label" for="selectPicker-Estructura-Distrito">Distrito</label>
        <div class="col-md-9">
            <select id="selectPicker-Estructura-Distrito" name="distrito" class="selectpicker form-control">
            </select>
        </div>
    </div>
	<div class="form-group">
        <label class="col-md-2 control-label" for="selectPicker-Estructura-Estado">Estado</label>
        <div class="col-md-9">
            <select id="selectPicker-Estructura-Estado" class="selectpicker form-control">
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="selectPicker-Estructura-Municipio">Municipio</label>
        <div class="col-md-9">
            <select id="selectPicker-Estructura-Municipio" name="municipio" class="selectpicker form-control">
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="selectPicker-Estructura-Parroquia">Parroquia</label>
        <div class="col-md-9">
            <select id="selectPicker-Estructura-Parroquia" name="parroquia" class="selectpicker form-control">
            </select>
        </div>
    </div>
	<div class="form-group">
        <label class="col-md-2 control-label" for="textInput-Estructura-Direccion">Dirección</label>
        <div class="col-md-9">
            <textarea rows="3" id="textInput-Estructura-Direccion" name="direccion" class="form-control" maxlength="255"></textarea>
        </div>
    </div>
	<div class="form-group">
        <label class="col-md-2 control-label" for="textInput-Horario">Horario</label>
        <div class="col-md-9">
            <input type="time" id="textInput-Horario" name="horario" class="form-control" />
        </div>
    </div>
	<div class="form-group">
        <label class="col-md-2 control-label" for="textInput-Estructura-Colores">Colores</label>
        <div class="col-md-9">
            <textarea rows="2" id="textInput-Estructura-Colores" name="colores" class="form-control" maxlength="100"></textarea>
        </div>
    </div>
	<div class="form-group">
        <label class="col-md-2 control-label" for="selectPicker-Estructura-Patrocinante">Patrocinante</label>
        <div class="col-md-9">
            <select id="selectPicker-Estructura-Patrocinante" class="selectpicker form-control">
            </select>
        </div>
    </div>
</div>

<script>
    
    $(document).ready(function () {
        fillEstructuraEstados();
		fillEstructuraDistritos();
    });

    $("#selectPicker-Estructura-Estado").change(function () {
        fillEstructuraMunicipios();
    });

    $("#selectPicker-Estructura-Municipio").change(function () {
        fillEstructuraParroquias();
    });
	    
    function fillEstructuraEstados() {
        $.getJSON("../data/geonames/?s=ADM1").done(function (data) {
            var picker = $("#selectPicker-Estructura-Estado");
            picker.empty();
            $.each(data, function () {
                picker.append($("<option />").val(this.admin1).text(this.name.replace("Estado ", "")));
            });
            fillEstructuraMunicipios();
        });
    }

    function fillEstructuraMunicipios() {
        var matchVal = $("#selectPicker-Estructura-Estado option:selected").val();
        var url = "../data/geonames/?s=ADM2&a1=" + matchVal;
        $.getJSON(url).done(function (data) {
            var picker = $("#selectPicker-Estructura-Municipio");
            picker.empty();
            $.each(data, function () {
                picker.append($("<option />").val(this.admin2).text(this.name.replace("Municipio ", "")));
            });
            fillEstructuraParroquias();
        });
    }

    function fillEstructuraParroquias() {
        var matchVal = $("#selectPicker-Estructura-Municipio option:selected").val();
        var url = "../data/geonames/?s=ADM3&a2=" + matchVal;
        $.getJSON(url).done(function (data) {
            var picker = $("#selectPicker-Estructura-Parroquia");
            picker.empty();
            $.each(data, function () {
                picker.append($("<option />").val(this.admin3).text(this.name.replace("Parroquia ", "")));
            });
        }).error(function(){
            var picker = $("#selectPicker-Estructura-Parroquia");
            picker.empty();
            picker.append($("<option />").val(0).text("Ninguna"));
        });
    }  

	function fillEstructuraDistritos() {
        $.getJSON("../api/v1/get/distritos").done(function (data) {
            var picker = $("#selectPicker-Estructura-Distrito");
            picker.empty();
            picker.append($("<option />").val(0).text("Ninguno"));
            var matchVal = $("#selectPicker-Estructura-Region option:selected").val();
            data.filter(function (item) {
                if (item.region == matchVal) {
                    picker.append($("<option />").val(item.id).text(item.nombre));
                }
            });
        });
    }
	
</script>