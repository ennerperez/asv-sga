<?php
    
    use Core\View;
    
    use Helpers\Session;
    
?>

<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    <span class="fa fa-user"></span><span class="hidden-sm"><?php echo Session::get("userdata")->usuario; ?></span><span class="caret"></span>
</a>
<ul class="dropdown-menu">
    <li><a href="#"><i class="fa fa-wrench"></i>Ajustes</a></li>
    <li><a href="#"><i class="fa fa-history"></i>Historial</a></li>
    <li class="divider"></li>
    <li><a href="../logout"><i class="fa fa-sign-out"></i>Cerrar</a></li>
</ul>
