<?php
    
    
    use Core\Language;
    
    $menu = new Language();
    $menu->load('Menu');
    
    //$scout_css = "scout-bg";
    //$scout_css ="scout-".substr($_SERVER['REQUEST_URI'],1)."-bg";
    
    //php echo $scout_css;
    
?>
<nav class="navbar navbar-default navbar-fixed-top navbar-pf" role="navigation">

    <div class="navbar-header" style="min-height: 26px;">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
            <!--<img src="" alt="Sistema de Gestión Administrativa" />-->
            <!--<div id="logo"></div>-->
            <!--<span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>--><!--<img src="http://scoutsvenezuela.org.ve/favicon.ico" alt="" />-->
        </a>
        <div class="navbar-brand-title">
            Sistema de Gestión Administrativa
        </div>
    </div>
    <div class="collapse navbar-collapse navbar-collapse-1">
        <ul class="nav navbar-nav navbar-utility">
            <li class="hidden-xs">
                <a href="http://www.scoutsvenezuela.org.ve/soporte/?v=submit_ticket" target="_blank">
                    <i class="fa fa-bug"></i>
                </a>
            </li>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <i class="fa fa-bell-slash"></i>
                    <?php echo $menu->get('sinalertas'); ?>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <i class="pficon pficon-user"></i>
                    <?php echo $menu->get('usuario'); ?>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#"><?php echo $menu->get('perfil'); ?></a></li>
                    <li><a href="#"><?php echo $menu->get('historial'); ?></a></li>
                    <li><a href="#"><?php echo $menu->get('accesos'); ?></a></li>
                    <li class="divider"></li>
                    <li><a href="#"><?php echo $menu->get('cerrar'); ?></a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-primary">
            <li><a href="/"><?php echo $menu->get('inicio'); ?></a></li>
            <li><a href="/estructura"><?php echo $menu->get('estructura'); ?></a></li>
            <li><a href="/directorio"><?php echo $menu->get('directorio'); ?></a></li>
        </ul>
    </div>
</nav>