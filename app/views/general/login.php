<?php
    
    use Core\Language;
    
    $menu = new Language();
    $menu->load('Menu');
    
?>

<style>

#login-form .form-group {
	margin-left: 0px !important;
	margin-right: 0px !important;
}

#login-icon {
	font-size: 128px;
}

#login-box {
	text-align: left;
}

</style>

<div class="blank-slate-pf">
	<div class="blank-slate-pf-icon">
		<i id="login-icon" class="fa fa-rocket"></i>
	</div>
	
	<div class="row">
		<div id="login-box" class="col-md-10 col-md-offset-1">
			<hr />
			<h1>Iniciar sesión</h1>
			<p>Bienvenido al sistema de gestión administrativa, para comenzar a trabajar en el sistema debe acceder con su correo electrónico y contraseña suministrada.</p>
			<hr />

			<form id="login-form" class="form-horizontal" action="login" method="post" role="form">
				<div class="form-group">
	                <label class="control-label" for="usernameInput-markup">Correo electrónico</label>
					<input id="usernameInput-markup" class="form-control" type="email" name="username" placeholder="alguien@ejemplo.com">
				</div>
				<div class="form-group">
	                <label class="control-label" for="passwordInput-markup">Contraseña</label>
					<input id="passwordInput-markup" class="form-control" type="password" name="password" placeholder="Contraseña">
				</div>
				<hr />
				<div class="col-xs-12 col-sm-8 col-md-8">
					<div class="checkbox">
						<label>
							<input type="checkbox"> Mantener la sesión iniciada
						</label>
					</div>
					<div class="help-block">
						<div class="form-group">
							<a href="#">¿No puedes acceder a tu cuenta?</a>
						</div>
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 submit">
					<input class="btn btn-default" type="submit" name="submit" value="Iniciar sesión">
				</div>
			</form>
		</div>
	</div>
</div>