<?php
    
    use Core\Language;
    
    $menu = new Language();
    $menu->load('Menu');
    
?>
<a href="#" data-toggle="dropdown" role="button" aria-expanded="false">
    <span class="pficon pficon-user"></span>
    <?php echo $menu->get('usuario'); ?>
    <b class="caret"></b>
</a>

<div class="dropdown-menu infotip bottom-right">
    <div class="arrow"></div>
    <ul class="list-group">
        <li class="list-group-item">
            <!--<span class="i pficon pficon-info"></span>-->
            <form class="form-horizontal" action="login" method="post">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="usernameInput-markup">Correo</label>
                    <div class="col-sm-12">
                        <input id="usernameInput-markup" class="form-control" type="email" name="username" placeholder="Correo">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="passwordInput-markup">Clave</label>
                    <div class="col-sm-12">
                        <input id="passwordInput-markup" class="form-control" type="password" name="password" placeholder="Clave">
                    </div>
                </div>

                <input class="btn btn-default" type="submit" name="submit" value="Iniciar">
            </form>
        </li>

    </ul>
    <div class="footer"><a href="#">Olvide mi contraseña</a></div>
</div>

