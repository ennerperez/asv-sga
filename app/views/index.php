<?php
    
    use Core\View;
    
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-md-5 col-sm-offset-1 col-md-offset-2">
            <?php View::render('general/login'); ?>
        </div>
        <div class="col-sm-4 col-md-3 col-sm-offset-1 col-md-offset-2 sidebar-pf sidebar-pf-right">
            <div class="sidebar-header sidebar-header-bleed-left sidebar-header-bleed-right">
                <h6>Últimas notificaciones</h6>
            </div>
            <?php  View::render('general/announcements', $data); ?>
        </div>
    </div>
</div>

