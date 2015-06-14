<?php
    use Core\Language;
    use Core\View;
    
    use Helpers\Assets;
    use Helpers\Session;
    use Helpers\Url;
    use Helpers\Hooks;
    //initialise hooks
    $hooks = Hooks::get();
    
?>

<div class="container-fluid" style="padding-top: 70px;">
    <div class="row">
        <div class="col-sm-8 col-md-9">
            
        </div>
        <div class="col-sm-4 col-md-3 sidebar-pf sidebar-pf-right">
            <div class="sidebar-header sidebar-header-bleed-left sidebar-header-bleed-right">
                <div class="actions pull-right">
                    <a href="#">Limpiar</a>
                </div>
                <h2 class="h5">Últimas notificaciones</h2>
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <h3 class="list-group-item-heading">Duis eu augue lectus</h3>
                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
                </li>
            </ul>
            <p><a href="#">Ver todos</a></p>
        </div>
    </div>
</div>

