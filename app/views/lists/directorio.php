<?php
    use Core\Language;
    use Core\View;
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9 col-md-10 col-sm-push-3 col-md-push-2">
            <div class="page-header"><h1><?php echo $data['title']; ?></h1></div>
            <?php View::render('lists/directorio/'.strtolower ($data['title']), $data); ?>
        </div>
        <div class="col-sm-3 col-md-2 col-sm-pull-9 col-md-pull-10 sidebar-pf sidebar-pf-left">
            <div class="nav-category">
                <h5>Movimiento</h5>
                <ul class="nav nav-pills nav-stacked">
                    <li class="adult adult-text"><a href="/adultos"><i class="fa fa-male"></i>Adultos</a></li>
                    <li class="young-text"><a href="/jovenes"><i class="fa fa-child"></i>Jovenes</a></li>
                    <li><a href="/patrocinantes"><i class="fa fa-building"></i>Patrocinantes</a></li>
                    <!--class="sponsor-text"-->
                </ul>
            </div>
            <div class="nav-category">
                <h5>Sistema</h5>
                <ul class="nav nav-pills nav-stacked">
                    <li class="admin-text"><a href="/usuarios"><i class="fa fa-users"></i>Usuarios</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php View::render('elements/md-button'); ?>

<script>
    $(document).ready(function() {
      $('#datatable').DataTable({
            "language": {
                "url": "<?php echo 'app/Language/'.LANGUAGE_CODE.'/DataTable.json'; ?>"
            }
        });
    });
</script>

<script>
    $('body').addClass('scouts-dashboard');
</script>