<?php
    
    use Core\Language;
    
    $menu = new Language();
    $menu->load('Menu');
    
?>

<div class="row">
    <div class="col-md-12">
        <img class="img-responsive" style="padding-top: 20px; width: 100%;" src="http://www.scoutsvenezuela.org.ve/images/banners/Banner-2015.png" alt="">
        <hr />
        <h1>Iniciar sesión</h1>
        <p>Bienvenido al sistema de gestión administrativa, para comenzar a trabajar en el sistema debe acceder con su correo electrónico y contraseña suministrada.</p>
        <hr />
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10  col-xs-offset-1">
        <form class="form-horizontal" action="login" method="post" role="form">
            <div class="form-group">
                <label class="control-label" for="usernameInput-markup">Correo electrónico</label>
                <input id="usernameInput-markup" class="form-control" type="email" name="username" placeholder="alguien@ejemplo.com">
            </div>
            <div class="form-group">
                <label class="control-label" for="passwordInput-markup">Contraseña</label>
                <input id="passwordInput-markup" class="form-control" type="password" name="password" placeholder="Contraseña">
            </div>
            <div class="form-group">
                <div class="col-xs-9 col-sm-8 col-md-9">
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
                <div class="col-xs-3 col-sm-4 col-md-3 submit">
                    <input class="btn btn-default" type="submit" name="submit" value="Iniciar sesión">
                </div>
            </div>
        </form>
    </div>
</div>