<form class="form-horizontal">
    <div class="form-group">
        <label class="col-md-2 control-label" for="textInput">DNI</label>
        <div class="col-md-6">
            <input type="text" id="textInput" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="textInput2">Primer nombre</label>
        <div class="col-md-6">
            <input type="text" id="textInput2" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="textInput3">Segundo nombre</label>
        <div class="col-md-6">
            <input type="text" id="textInput3" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="textInput4">Primer apellido</label>
        <div class="col-md-6">
            <input type="text" id="textInput4" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="textInput5">Segundo apellido</label>
        <div class="col-md-6">
            <input type="text" id="textInput5" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="textInput6">Fecha de nacimiento</label>
        <div class="col-md-6">
            <div class="input-group date" id="datetimepicker1">
                <input type="text" id="textInput6" class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker1').datetimepicker();
                });
            </script>
        </div>
    </div>   
    <div class="form-group">
        <label class="col-md-2 control-label">Genero</label>
        <div class="col-md-6">
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                    Femenino
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    Masculino
                </label>
            </div>
        </div>
    </div>
    <!--<div class="form-group">
        <label class="col-md-2 control-label" for="boostrapSelect">Vestibulum</label>
        <div class="col-md-10">
            <select class="selectpicker" multiple="" data-selected-text-format="count>3" id="boostrapSelect" style="display: none;">
                <option>Mustard</option>
                <option>Ketchup</option>
                <option>Relish</option>
                <option>Onions</option>
                <option>Mushrooms</option>
                <option>Pickles</option>
                <option>Mayonnaise</option>
                <option data-divider="true"></option>
                <option data-subtext="Hot">Tabasco</option>
                <option data-subtext="Hotter">Sriracha</option>
                <option data-subtext="Hottest">Wasabi</option>
            </select><div class="btn-group bootstrap-select show-tick"><button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" data-id="boostrapSelect" title="Nothing selected"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="caret"></span></button>
                <div class="dropdown-menu open">
                    <ul class="dropdown-menu inner selectpicker" role="menu">
                        <li rel="0"><a tabindex="0" class="" style=""><span class="text">Mustard</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li>
                        <li rel="1"><a tabindex="0" class="" style=""><span class="text">Ketchup</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li>
                        <li rel="2"><a tabindex="0" class="" style=""><span class="text">Relish</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li>
                        <li rel="3"><a tabindex="0" class="" style=""><span class="text">Onions</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li>
                        <li rel="4"><a tabindex="0" class="" style=""><span class="text">Mushrooms</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li>
                        <li rel="5"><a tabindex="0" class="" style=""><span class="text">Pickles</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li>
                        <li rel="6"><a tabindex="0" class="" style=""><span class="text">Mayonnaise</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li>
                        <li rel="7"><div class="div-contain"><div class="divider"></div></div></li>
                        <li rel="8"><a tabindex="0" class="" style=""><span class="text">Tabasco<small class="muted text-muted">Hot</small></span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li>
                        <li rel="9"><a tabindex="0" class="" style=""><span class="text">Sriracha<small class="muted text-muted">Hotter</small></span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li>
                        <li rel="10"><a tabindex="0" class="" style=""><span class="text">Wasabi<small class="muted text-muted">Hottest</small></span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li>
                    </ul>
                </div></div>
        </div>
    </div>-->
    <div class="form-group">
        <div class="col-md-10 col-md-offset-2">
            <button type="button" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-default">Cancelar</button>
        </div>
    </div>
</form>