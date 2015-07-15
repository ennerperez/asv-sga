<?php
    
?>

<div id="login-box" class="row">
    <div class="col-xs-12 header">
        <h2>Iniciar sesión</h2>
        <p>Bienvenido al sistema de gestión administrativa, para comenzar a trabajar en el sistema debe acceder con su correo electrónico y contraseña suministrada.</p>
    </div>
    <div class="col-xs-12">
        <form id="login-form" class="form-horizontal" action="login" method="post" role="form">
            <div class="panel panel-default" style="padding-top: 30px;">
                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="form-group">
                            <label class="control-label" for="usernameInput-markup">Correo electrónico</label>
                            <input id="usernameInput-markup" class="form-control" type="email" name="username" placeholder="alguien@ejemplo.com">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="passwordInput-markup">Contraseña</label>
                            <input id="passwordInput-markup" class="form-control" type="password" name="password" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Recordar mis datos
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-7">

                                <div class="help-block">
                                    <div class="form-group">
                                        <a href="http://www.scoutsvenezuela.org.ve/soporte/?v=submit_ticket" target="_blank">¿No puedes acceder a tu cuenta?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-5 submit text-right">
                                <input class="btn btn-default" type="submit" name="submit" value="Iniciar sesión">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>