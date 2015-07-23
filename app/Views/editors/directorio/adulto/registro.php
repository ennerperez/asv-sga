<?php
    use Core\Language;
    use Core\View;
   
    use Helpers\Session;

    $regionid = Session::get('userdata')->region;
    $distritoid = Session::get('userdata')->distrito;
    $grupoid = Session::get('userdata')->grupo;

    if(is_null($regionid)) $regionid = 0;
    if(is_null($distritoid)) $distritoid = 0;
    if(is_null($grupoid)) $grupoid = 0;

    //function getIdMiembros(){
    //    if (Session::get('loggin') == true)
    //    {
    //        $regionid = Session::get('userdata')->region;
    //        $distritoid = Session::get('userdata')->distrito;
    //        $grupoid = Session::get('userdata')->grupo;

    //        if(is_null($regionid)) $regionid = 0;
    //        if(is_null($distritoid)) $distritoid = 0;
    //        if(is_null($grupoid)) $grupoid = 0;

    //        return array($regionid,$distritoid,$grupoid);
    //    }
    //}

?>

<div class="container-fluid">
    <h3>Registro</h3>
    <hr />
    <?php 
        if($regionid == 0){
            echo '<div class="form-group">
                    <label class="col-md-2 control-label" for="selectPicker-Region">Región</label>
                    <div class="col-md-9">
                        <select id="selectPicker-Region" name="region" class="selectpicker form-control">
                        </select>
                    </div>
                  </div>';
        } 
    ?>
    <?php 
        if($distritoid == 0){
            echo '<div class="form-group">
                    <label class="col-md-2 control-label" for="selectPicker-Distrito">Distrito</label>
                    <div class="col-md-9">
                        <select id="selectPicker-Distrito" name="distrito" class="selectpicker form-control">
                        </select>
                    </div>
                  </div>';
        }
    ?>
    <?php 
        if($grupoid == 0){
            echo '<div class="form-group">
                    <label class="col-md-2 control-label" for="selectPicker-Grupo">Grupo</label>
                    <div class="col-md-9">
                        <select id="selectPicker-Grupo" name="grupo" class="selectpicker form-control">
                        </select>
                    </div>
                  </div>';
        }
    ?>
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

<script>

    <?php 
        
        echo 'var regionid = '.$regionid.';';
        echo 'var distritoid = '.$distritoid.';';
        echo 'var grupoid = '.$grupoid.';';

    ?>

</script>
<script>

    $(document).ready(function () {
        if (regionid == 0) {fillRegiones(); } else { fillDistritos(); }
        fillCargos();
    });

    $("#selectPicker-Region").change(function () {
        if (distritoid == 0) { fillDistritos(); } else { fillGrupos(); }
        fillCargos();
    });

    $("#selectPicker-Distrito").change(function () {
        if (grupoid == 0) { fillGrupos();} 
        fillCargos();
    });

    $("#selectPicker-Grupo").change(function () {
        fillCargos();
    });


    function fillRegiones() {
        $.getJSON("../api/v1/get/regiones").done(function (data) {
            var picker = $("#selectPicker-Region");
            picker.empty();
            $.each(data, function () {
                picker.append($("<option />").val(this.id).text(this.nombre));
            });
            fillDistritos();
        });
    }

    function fillDistritos() {
        $.getJSON("../api/v1/get/distritos").done(function (data) {
            var picker = $("#selectPicker-Distrito");
            picker.empty();
            picker.append($("<option />").val(0).text("Ninguno"));
            if (distritoid == 0) {
                var matchVal = $("#selectPicker-Region option:selected").val();
            }
            else{
                var matchVal = regionid;
            }
            
            data.filter(function (item) {
                if (item.region == matchVal) {
                    picker.append($("<option />").val(item.id).text(item.nombre));
                }
            });
            fillGrupos();
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
            });
        });
    }

    function fillCargos() {

        var nivel = "regiones";

        if ($("#selectPicker-Distrito option:selected").val() > 0 || (distritoid != 0)) {
            nivel = "distritos";
        }

        if ($("#selectPicker-Grupo option:selected").val() > 0 || (grupoid != 0)) {
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