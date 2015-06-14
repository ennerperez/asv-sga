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
                <a href="http://www.scoutsvenezuela.org.ve/soporte/?v=submit_ticket" target="_blank">
                    <span class="fa fa-at"></span>
                </a>
            </li>
            <li class="dropdown">
                 <?php if (Session::get('loggin') == true) { View::render('admin/alerts');} ?>
            </li>
            <li class="dropdown">
                <?php if (Session::get('loggin') == true) { View::render('admin/menu');}
                                                   else { View::render('admin/login', $data);} ?>
            </li>
        </ul>       
            <?php if (Session::get('loggin') == true) { View::render('admin/navbar');}
                                                   else { View::render('navbar', $data);} ?>
    </div>
</nav>