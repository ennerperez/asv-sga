<?php
    use Core\Language;
    use Core\View;
?>

<div class="container-fluid" style="padding-top: 70px;">
    <div class="row">
        <div class="col-sm-9 col-md-10 col-sm-push-3 col-md-push-2">
            <ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
                <li>Directorio</li>
            </ol>
            <h1><?php echo $data['title']; ?></h1>
            <hr />
            <?php View::render('lists/directorio/'.strtolower ($data['title']), $data); ?>
        </div>
        <div class="col-sm-3 col-md-2 col-sm-pull-9 col-md-pull-10 sidebar-pf sidebar-pf-left">
            <div class="nav-category">
                <h2>Movimiento</h2>
                <ul class="nav nav-pills nav-stacked">
                    <!--<li><a class="scouts" href="/directorio"><i class="fa fa-anchor"></i>General</a></li>-->
                    <li><a class="adultos" href="/adultos"><i class="fa fa-male"></i>Adultos</a></li>
                    <li><a class="jovenes" href="/jovenes"><i class="fa fa-child"></i>Jovenes</a></li>
                    <li><a class="patrocinantes" href="/patrocinantes"><i class="fa fa-building"></i>Patrocinantes</a></li>
                </ul>
            </div>
            <div class="nav-category">
                <h2>Sistema</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="/usuarios"><i class="fa fa-users"></i>Usuarios</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php View::render('elements/md-button'); ?>

<script>
    // Initialize Datatables
    $(document).ready(function() {
      $('.datatable').dataTable();
    });
</script>