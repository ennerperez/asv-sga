<?php
    
    use Core\Language;
    use Core\View;
    
    use Helpers\Session;
    
    $menu = new Language();
    $menu->load('Menu');
    
?>

<ul class="nav navbar-nav navbar-primary">
    <li><a href="/"><?php echo $menu->get('inicio'); ?></a></li>
    <li><a href="/estructura"><?php echo $menu->get('estructura'); ?></a></li>
    <li><a href="/directorio"><?php echo $menu->get('directorio'); ?></a></li>
</ul>