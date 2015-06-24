<?php
    
    use Core\Language;
    use Core\View;
    
    use Helpers\Session;
    
    $menu = new Language();
    $menu->load('Menu');
    
?>

<a href="#" data-toggle="dropdown" role="button" aria-expanded="false">
    <span class="pficon pficon-info"></span>
    <?php echo $menu->get('alertas'); ?>
</a>
<div class="dropdown-menu infotip bottom-right">
    <div class="arrow"></div>
    <ul class="list-group">
        <li class="list-group-item">
            <span class="i pficon pficon-info"></span>
            <?php echo $menu->get('sinalertas'); ?>
        </li>
        <!--
        <li class="list-group-item">
            <span class="i pficon pficon-info"></span> Modified Datasources ExampleDS
        </li>
        -->
    </ul>
    <div class="footer"><a href="#">Limipiar</a></div>
</div>
