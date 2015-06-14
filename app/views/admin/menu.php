<?php
    
    use Core\Language;
    
    $menu = new Language();
    $menu->load('Menu');
    
?>
<a href="#" data-toggle="dropdown" role="button" aria-expanded="false">
    <span class="pficon pficon-user"></span>
    <?php echo $menu->get('iniciar'); ?>
    <b class="caret"></b>
</a>
<ul class="dropdown-menu" role="menu">
    <li><a href="#"><?php echo $menu->get('perfil'); ?></a></li>
    <li><a href="#"><?php echo $menu->get('historial'); ?></a></li>
    <li><a href="#"><?php echo $menu->get('accesos'); ?></a></li>
    <li class="divider"></li>
    <li><a href="logout"><?php echo $menu->get('cerrar'); ?></a></li>
</ul>
