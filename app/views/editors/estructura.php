<?php
    use Core\Language;
    use Core\View;
?>

<div class="container-fluid" style="padding-top: 70px;">
    <div class="row">
        <div class="col-sm-9 col-md-10 col-sm-push-3 col-md-push-2">
            <!--<ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
                <li>Estructura</li>
            </ol>-->
            <h1><?php echo $data['title']; ?></h1>
            <hr />
            <?php View::render('editors/estructura/'.strtolower ($data['title']), $data); ?>
        </div>
        <div class="col-sm-3 col-md-2 col-sm-pull-9 col-md-pull-10 sidebar-pf sidebar-pf-left">
           <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Generales
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                  <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#">Identificación</a></li>
                    <!--<li><a href="#">Miembros</a></li>-->
                      <li><a href="#">Ubicación</a></li>
                    <li><a href="#">Adicionales</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                    Miembros
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">Cargos</a></li>
                    <li><a href="#">Adultos</a></li>
                    <li><a href="#">Jovenes</a></li>
                  </ul>
                </div>
              </div>
            </div>
               <!--
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                    Iaculis quis feugiat
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">Sed est</a></li>
                    <li><a href="#">Curabitur</a></li>
                    <li><a href="#">Eu dignissim</a></li>
                  </ul>
                </div>
              </div>
            </div>-->
          </div>
        </div>
    </div>
</div>

<!-- View::render('elements/md-button'); -->

<!--<script>
    // Initialize Datatables
    $(document).ready(function() {
      $('.datatable').dataTable();
    });
</script>-->