<?php

	use Core\View;

?>

<form class="form-horizontal" action="guardar" method="post" role="form">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="identificacion">
                    <?php View::render('editors/directorio/adulto/identificacion'); ?>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="contacto">
                    <?php View::render('editors/directorio/adulto/contacto'); ?>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="asociacion">
                    <?php View::render('editors/directorio/adulto/registro'); ?>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="capacitacion">
                    <?php View::render('editors/directorio/adulto/capacitacion'); ?>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                    <button type="submit" class="btn btn-primary" name="submit">Guardar</button>
                    <button type="button" class="btn btn-default">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    
    $('body').addClass('scouts-dashboard');

</script>