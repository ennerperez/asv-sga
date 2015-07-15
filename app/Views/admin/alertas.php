<?php
    
    use Core\View;
    
    use Helpers\Session;
    
?>

<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    <span class="fa fa-bell"></span><span class="hidden-sm">Alertas</span> <span class="caret"></span>
</a>
<ul class="dropdown-menu">
            <li class="disabled">
                <a href="#"><span class="fa fa-bell-slash"></span>No hay nuevas alertas.</a></li>
    <!--<li>
    <a href="#" class="bg-danger">Debe completar la información previa para acceder al sistema.
    </a>
        
    </li>
    <li>
    <a href="#" class="bg-warning">Debe completar la información previa para acceder al sistema.</a>
    </li>-->
    <li class="divider"></li>
    <li>
        <a href="#">Limipiar</a>
    </li>
</ul>