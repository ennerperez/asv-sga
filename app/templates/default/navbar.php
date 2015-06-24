<?php
    
    use Core\Language;
    use Core\View;

    use Helpers\Session;

    $menu = new Language();
    $menu->load('Menu');
    
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
                <a href="http://www.scoutsvenezuela.org.ve/soporte/?v=submit_ticket" target="_blank" role="button" aria-expanded="false">
                    <span class="fa fa-at"></span>
                    &nbsp;&nbsp;Soporte
                </a>
            </li>
            <li class="dropdown">
                 <?php View::render('alerts'); ?>
            </li>
            <li class="dropdown">
                <?php View::render('profile', $data); ?>
            </li>
        </ul>
        <?php View::render('navbar', $data); ?>
    </div>
</nav>