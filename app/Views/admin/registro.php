<?php

	use Core\View;

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-header page-header-bleed-right">
                <h4>Registro inicial</h4>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div id="alert" class="alert alert-danger" role="alert">Lamentablemente es necesario que complete la información previa para acceder al sistema.</div>
                </div>
                <div class="col-xs-10 col-xs-offset-1">
                    <form class="form-horizontal" action="guardar" method="post" role="form">
                        <div class="collapse fade in" id="collapseRegistro1">
                            <div class="panel panel-default">
                                <div class="panel-body">
									 <?php View::render('editors/directorio/adulto/identificacion'); ?>
                                </div>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a class="btn btn-primary" type="button" href="#top" data-toggle="collapse" data-target="#collapseRegistro1,#collapseRegistro2" aria-expanded="false">Siguiente</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse fade" id="collapseRegistro2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?php View::render('editors/directorio/adulto/contacto'); ?>
                                </div>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a class="btn btn-default" type="button" href="#top" data-toggle="collapse" data-target="#collapseRegistro1,#collapseRegistro2" aria-expanded="false">Anterior</a>
                                            <a class="btn btn-primary" type="button" href="#top" data-toggle="collapse" data-target="#collapseRegistro2,#collapseRegistro4" aria-expanded="false">Siguiente</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="collapse fade" id="collapseRegistro3">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    View::render('editors/directorio/adulto/registro');
                                </div>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a class="btn btn-default" type="button" href="#top" data-toggle="collapse" data-target="#collapseRegistro2,#collapseRegistro3" aria-expanded="false">Anterior</a>
                                            <a class="btn btn-primary" type="button" href="#top" data-toggle="collapse" data-target="#collapseRegistro3,#collapseRegistro4" aria-expanded="false">Siguiente</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                        <div class="collapse fade" id="collapseRegistro4">
                            <div class="panel panel-default">
                                <div class="panel-body">
									<?php View::render('editors/estructura/grupo/identificacion'); ?>
                                </div>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a class="btn btn-default" type="button" href="#top" data-toggle="collapse" data-target="#collapseRegistro2,#collapseRegistro4" aria-expanded="false">Anterior</a>
                                            <a class="btn btn-primary" type="button" href="#top" data-toggle="collapse" data-target="#collapseRegistro4,#collapseRegistro5" aria-expanded="false">Siguiente</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse fade" id="collapseRegistro5">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="container-fluid">
                                        <h3>Cuenta</h3>
                                        <hr />
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="textInput-Clave">Contraseña</label>
                                            <div class="col-md-9">
                                                <input type="password" id="textInput-Clave" name="clave" class="form-control" maxlength="25">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="textInput-Clave2">Confirmar</label>
                                            <div class="col-md-9">
                                                <input type="password" id="textInput-Clave2" name="clave2" class="form-control" maxlength="25">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a class="btn btn-default" type="button" href="#top" data-toggle="collapse" data-target="#collapseRegistro4,#collapseRegistro5" aria-expanded="false">Anterior</a>
                                            <a class="btn btn-primary" type="button" href="#top" data-toggle="collapse" data-target="#collapseRegistro5,#collapseRegistro6" aria-expanded="false">Siguiente</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse fade" id="collapseRegistro6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="container-fluid">
                                        <h3>Confirmar</h3>
                                        <hr />
										<p>Nuestro consejo de grupo conoce el Propósito del movimiento Scout, así como su Método educativo y sus Principios fundamentales y desea formar parte de la Asociación de Scouts de Venezuela, por lo tanto se compromete a cumplir con los Principios, Organización y Reglamentos y a participar en sus actividades.</p>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="checkbox" style="padding-left: 15px;">
                                                    <label>
                                                        <input type="checkbox">Lo certifico.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a class="btn btn-default" type="button" href="#top" data-toggle="collapse" data-target="#collapseRegistro6,#collapseRegistro5" aria-expanded="false">Anterior</a>
                                            <button class="btn btn-primary" type="button" aria-expanded="false">Finalizar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    
    $('body').addClass('scouts-dashboard');

</script>