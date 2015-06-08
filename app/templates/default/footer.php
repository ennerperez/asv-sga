<?php
    use Helpers\Assets;
    use Helpers\Url;
    use Helpers\Hooks;
    //initialise hooks
    $hooks = Hooks::get();
?>

<footer>
    <div class="container">
        <b>Sistema de Gestión Administrativa.</b><br />
        <small>Soporte Técnico del Centro de Servicio Scout Nacional. <?php echo date("Y"); ?> </small><br />
        <!--<i><q>Por Scouts para Scouts</q></i>-->
    </div>
</footer>
<!-- JS -->
<?php
    Assets::js(array(
        '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js',
        '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js',
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js',
        //'//cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js',
        Url::templatePath() . 'js/patternfly.min.js'//,
        //Url::templatePath() . 'js/scripts.js'
    ));
    //hook for plugging in javascript
    $hooks->run('js');
    //hook for plugging in code into the footer
    $hooks->run('footer');
?>
</body>
</html>
