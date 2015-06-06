<?php 

use Core\Language;

$menu = new Language();
$menu->load('Menu');
    
$scout_css = "scout-bg";
$scout_css ="scout-".substr($_SERVER['REQUEST_URI'],1)."-bg";

?>
<nav class="navbar navbar-default navbar-fixed-top <?php echo $scout_css; ?>">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-main-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <div id="logo"></div>
                <!--<span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>--><!--<img src="http://scoutsvenezuela.org.ve/favicon.ico" alt="" />-->
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-main-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- <span class="sr-only">(current)</span> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="ft"><i class="fa fa-sitemap hidden-md"></i><span class="ft hidden-sm"><?php echo $menu->get('organizacion'); ?></span></span><span class="caret hidden-xs"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/regiones"><?php echo $menu->get('regiones'); ?></a></li>
                        <li><a href="/distritos"><?php echo $menu->get('distritos'); ?></a></li>
                        <li class="divider"></li>
                        <li><a href="/grupos"><?php echo $menu->get('grupos'); ?></a></li>
                        <li class="divider"></li>
                        <li><a href="/patrullas"><?php echo $menu->get('patrullas'); ?></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="ft"><i class="fa fa-users hidden-md"></i><span class="ft hidden-sm"><?php echo $menu->get('directorio'); ?></span></span><span class="caret hidden-xs"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/directorio"><?php echo $menu->get('general'); ?></a></li>
                        <li class="divider"></li>
                        <li><a id="adultos" href="/adultos"><?php echo $menu->get('adultos'); ?></a></li>
                        <li><a id="jovenes" href="/jovenes"><?php echo $menu->get('jovenes'); ?></a></li>
                        <li class="divider"></li>
                        <li><a id="patrocinantes" href="/patrocinantes"><?php echo $menu->get('patrocinantes'); ?></a></li>
                    </ul>
                </li>

            </ul>
            <form class="navbar-form navbar-left hidden-xs " role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="<?php echo $menu->get('buscar'); ?>">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="ft"><i class="fa fa-bell-slash hidden-md"></i><span class="ft hidden-sm"><?php echo $menu->get('alertas'); ?></span></span><span class="caret hidden-xs"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="disabled"><a href="#"><?php echo $menu->get('sinalertas'); ?></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="ft"><i class="fa fa-user hidden-md"></i><span class="ft hidden-sm"><?php echo $menu->get('usuario'); ?></span></span><span class="caret hidden-xs"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><?php echo $menu->get('perfil'); ?></a></li>
                        <li><a href="#"><?php echo $menu->get('historial'); ?></a></li>
                        <li><a href="#"><?php echo $menu->get('accesos'); ?></a></li>
                        <li class="divider"></li>
                        <li><a href="#"><?php echo $menu->get('cerrar'); ?></a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>