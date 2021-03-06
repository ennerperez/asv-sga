<?php
    use Core\Language;
    use Core\View;
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9 col-md-10 col-sm-push-3 col-md-push-2">
            <div class="page-header"><h1><?php echo $data['title']; ?></h1></div>
            <?php View::render('lists/estructura/'.strtolower ($data['title']), $data); ?>
        </div>
        <div class="col-sm-3 col-md-2 col-sm-pull-9 col-md-pull-10 sidebar-pf sidebar-pf-left">
            <div class="nav-category">
                <h5>Estructura</h5>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="/regiones"><i class="fa fa-map-marker"></i>Regiones</a></li>
                    <li><a href="/distritos"><i class="fa fa-location-arrow"></i>Distritos</a></li>
                    <li><a href="/grupos"><i class="fa fa-magnet"></i>Grupos</a></li>
                    <li><a href="/patrullas"><i class="fa fa-puzzle-piece"></i>Patrullas</a></li>
                </ul>
            </div>
            <div class="nav-category">
                <h5>Otros</h5>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="/areas"><i class="fa fa-cube"></i>Areas</a></li>
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
