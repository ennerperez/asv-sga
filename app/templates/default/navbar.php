<nav class="navbar navbar-default navbar-fixed-top">
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="ft"><i class="fa fa-sitemap hidden-md"></i><span class="ft hidden-sm">Organización</span></span><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a class="intitute" href="/regiones">Regiones</a></li>
                        <li><a class="intitute" href="/distritos">Distritos</a></li>
                        <li class="divider"></li>
                        <li><a class="intitute" href="/grupos">Grupos</a></li>
                        <li class="divider"></li>
                        <li><a class="intitute" href="/patrullas">Patrullas</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="ft"><i class="fa fa-users hidden-md"></i><span class="ft hidden-sm">Directorio</span></span><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/directorio">General</a></li>
                        <li class="divider"></li>
                        <li><a id="adults" href="/adultos">Adultos</a></li>
                        <li><a id="young" href="/jovenes">Jovenes</a></li>
                        <li class="divider"></li>
                        <li><a id="sponsors" href="/patrocinantes">Patrocinantes</a></li>
                    </ul>
                </li>

            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar...">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="ft"><i class="fa fa-bell-slash hidden-md"></i><span class="ft hidden-sm">Alertas</span></span><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="disabled"><a href="#">No hay nuevas alertas</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="ft"><i class="fa fa-user hidden-md"></i><span class="ft hidden-sm">Usuario</span></span><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Perfil</a></li>
                        <li><a href="#">Historial</a></li>
                        <li><a href="#">Accesos</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Cerrar</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>