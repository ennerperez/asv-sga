<?php
    
    use Core\View;

    use Helpers\Session;
    
?>

<ul class="nav navbar-nav">
    <li>
        <a href="/"><i class="fa fa-tachometer"></i>Principal</a>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-sitemap"></i>Estructura<span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class="admin" href="/regiones">Regiones</a>
            </li>
            <li>
                <a class="admin" href="/distritos">Distritos</a>
            </li>
            <li>
                <a class="admin" href="/grupos">Grupos</a>
            </li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-book"></i>Directorio<span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class="adult" href="/adultos">Adultos</a>
            </li>
            <li>
                <a class="young" href="/jovenes">Jovenes</a>
            </li>
            <li>
                <a class="sponsor" href="/patrocinantes">Patrocinantes</a>
            </li>
            <li role="separator" class="divider"></li>
            <li>
                <a class="admin" href="/usuarios">Usuarios</a>
            </li>
        </ul>
    </li>
</ul>
