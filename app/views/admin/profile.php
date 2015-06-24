<?php
    
    use Core\Language;
    use Core\View;
    
    use Helpers\Session;
    
    $menu = new Language();
    $menu->load('Menu');
    
?>

<a href="#" data-toggle="dropdown" role="button" aria-expanded="false">
    <span class="pficon pficon-user"></span>
    Bienvenido
</a>
<ul class="dropdown-menu" role="menu">
    <li><a href="#"><?php echo $menu->get('perfil'); ?></a></li>
    <li><a href="#"><?php echo $menu->get('historial'); ?></a></li>
    <li><a href="#"><?php echo $menu->get('accesos'); ?></a></li>
    <li class="divider"></li>
    <li><a href="logout"><?php echo $menu->get('cerrar'); ?></a></li>
</ul>
