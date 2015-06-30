<?php
    use Core\Language;
    use Core\View;
?>

<form class="form-horizontal">
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade in active" id="identification">
			<h3>Informaci&oacute;n personal</h3>
			<hr/>
			<div class="form-group">
				<label class="col-md-2 control-label" for="textInput-DNI">DNI</label>
				<div class="col-md-6">
					<input type="text" id="textInput-DNI" class="form-control" maxlength="25">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="textInput-FirstName">Primer nombre</label>
				<div class="col-md-6">
					<input type="text" id="textInput-FirstName" class="form-control" maxlength="50">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="textInput-SecondName">Segundo nombre</label>
				<div class="col-md-6">
					<input type="text" id="textInput-SecondName" class="form-control" maxlength="50">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="textInput-LastName">Primer apellido</label>
				<div class="col-md-6">
					<input type="text" id="textInput-LastName" class="form-control" maxlength="50">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="textInput-SurName">Segundo apellido</label>
				<div class="col-md-6">
					<input type="text" id="textInput-SurName" class="form-control" maxlength="50">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="datetimePicker-Brithdate">Nacimiento</label>
				<div class="col-md-6">
					<div class="input-group date" id="datetimePicker-Brithdate">
						<input type="text" class="form-control" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
					<script type="text/javascript">
						$(function () {
							$('#datetimePicker-Brithdate').datetimepicker({
								locale: '<?php echo LANGUAGE_CODE; ?>',
								format: 'l'
							});
						});
					</script>
				</div>
			</div> 
			<div class="form-group">
				<label class="col-md-2 control-label" for="selectpicker-State">Estado civil</label>
				<div class="col-md-6">
					<select id="selectpicker-State" class="selectpicker form-control">
						<option>Soltero</option>
						<!--<option>Concubinato</option>-->
						<option>Casado</option>
						<option>Divorciado</option>
						<option>Viudo</option>
					</select>
					<script>
						//$(function () {
							//$('#selectpicker-State').selectpicker();
						//});
					</script>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="selectpicker-Country">Nacionalidad</label>
				<div class="col-md-6">
					<select id="selectpicker-Country" class="selectpicker form-control">
						<option>Venezolano</option>
						<option>Extrangero</option>
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
				<div class="col-md-6">
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" id="optionsRadios-Genre" value="0" checked="">
							Femenino
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" id="optionsRadios-Genre" value="1">
							Masculino
						</label>
					</div>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="contact">
			<h3>Informaci&oacute;n de contacto</h3>
			<hr/>
			<div class="form-group">
				<label class="col-md-2 control-label" for="textInput-Phone">Tel&eacute;fono</label>
				<div class="col-md-6">
					<input type="text" id="textInput-Phone" class="form-control" maxlength="25">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="textInput-Email">Correo</label>
				<div class="col-md-6">
					<input type="email" id="textInput-Email" class="form-control" maxlength="50">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="textInput-Address">Direcci&oacute;n</label>
				<div class="col-md-6">
					<textarea rows="3" id="textInput-Address" class="form-control" maxlength="255"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Ubicaci&oacute;n</label>
				<div class="col-md-6">
					<?php View::render('elements/gmap'); ?>		
				</div>
			</div>

		</div>
		<div role="tabpanel" class="tab-pane fade" id="medic">
			<h3>Informaci&oacute;n medica</h3>
			<hr/>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="aditional">
			<h3>Informaci&oacute;n adicional</h3>
			<hr/>
		</div>
		<hr />
		<div class="form-group">
			<div class="col-md-10 col-md-offset-2">
	            <button type="button" class="btn btn-primary">Guardar</button>
				<button type="button" class="btn btn-default">Cancelar</button>
			</div>
		</div>
	</div>
</form>