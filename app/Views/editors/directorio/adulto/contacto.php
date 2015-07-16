<?php
    use Core\Language;
    use Core\View;
?>

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

<script>
    
    $(document).ready(function () {
        fillEstados();
    });

    $("#selectPicker-Estado").change(function () {
        fillMunicipios();
    });

    $("#selectPicker-Municipio").change(function () {
        fillParroquias();
    });
	    
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

</script>