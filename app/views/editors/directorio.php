<?php

    use Core\Language;
    use Core\View;

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9 col-md-10 col-sm-push-3 col-md-push-2">
            <ol class="breadcrumb">
                <li><a href="."><?php echo $data['title']; ?></a></li>
                <li>Nuevo registro</li>
            </ol>
            <?php View::render('editors/directorio/'.strtolower ($data['title']), $data); ?>
        </div>
        <div class="col-sm-3 col-md-2 col-sm-pull-9 col-md-pull-10 sidebar-pf sidebar-pf-left">
            <div class="nav-category">
                <h5>Datos</h5>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#identificacion" aria-controls="identificacion" role="tab" data-toggle="tab">Identificación</a></li>
                    <li><a href="#contacto" aria-controls="contacto" role="tab" data-toggle="tab">Contacto</a></li>
                    <li><a href="#asociacion" aria-controls="asociacion" role="tab" data-toggle="tab">Registro</a></li>
                    <li><a href="#capacitacion" aria-controls="capacitacion" role="tab" data-toggle="tab">Capacitación</a></li>
                </ul>
            </div>
            <!--<div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Personales
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="#identification" aria-controls="identification" role="tab" data-toggle="tab">Identificación</a></li>
                                <li><a href="#contact" aria-controls="identification" role="tab" data-toggle="tab">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                    Asociación
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#asociacion" aria-controls="asociacion" role="tab" data-toggle="tab">Registro</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>

<script>
    $('body').addClass('scouts-dashboard');
</script>