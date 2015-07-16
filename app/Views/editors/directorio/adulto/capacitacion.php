<?php
    use Core\Language;
    use Core\View;
?>

<div class="container-fluid">
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
</div>
