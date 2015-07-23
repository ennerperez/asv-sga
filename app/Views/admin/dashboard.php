<?php
    use Core\Language;
    use Core\View;
    
    use Helpers\Session;
    use Helpers\Assets;
    use Helpers\Url;
    use Helpers\Hooks;
    //initialise hooks
    $hooks = Hooks::get();
    
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8 col-md-9">
            <div class="page-header page-header-bleed-right">
                <div class="actions pull-right">
                    <a href="admin"><i class="fa fa-refresh"></i>Recargar</a>
                </div>
                <h4>Bienvenido, <?php echo Session::get("userdata")->nombre.' '.Session::get("userdata")->apellido; ?></h4>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="jumbotron">
                        <h3>En construcción</h3>
                        <div class="alert alert-warning" role="alert">Lamentablemente esta sección aun se encuentra en construcción.</div>
                    </div>
                </div>
            </div>
                            <!--<h5>Crecimiento de la población</h5>
                            <div id="chart0" style="max-height: 128px;"></div>
                            <hr>
                
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2 class="h4">Distribución etaria</h2>
                                    <div id="chart1"></div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="h4">Capacidad de los grupos</h2>
                
                                    <div id="chart4"></div>
                                </div>
                            </div>-->
        </div>
        <div class="col-sm-4 col-md-3 sidebar-pf sidebar-pf-right">
            <div class="sidebar-header sidebar-header-bleed-left sidebar-header-bleed-right">
                <h6>Últimas notificaciones</h6>
            </div>
            <?php  View::render('general/announcements', $data); ?>
        </div>
    </div>
</div>

<?php
    
    Assets::js(array(
        '//cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js', 
        '//cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.js')
        );
    
     //hook for plugging in javascript
    $hooks->run('js');
    
    Assets::css(array(
        '//cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.css')
        );
    
    $hooks->run('css');
    
    //hook for plugging in code into the footer
    $hooks->run('footer');
    
?>

<script>
    $('body').addClass('scouts-dashboard');
</script>
