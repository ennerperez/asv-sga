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
            
            switch (ENVIRONMENT) {
                case 'development':
                    Assets::js(array(
                        Url::templatePath() . 'js/jquery.js',
                        Url::templatePath() . 'js/jquery.dataTables.js',
                        Url::templatePath() . 'js/moment.js',
                        Url::templatePath() . 'js/bootstrap.js',
                        Url::templatePath() . 'js/bootstrap-datetimepicker.js',
                        Url::templatePath() . 'js/patternfly.js',
                        Url::templatePath() . 'js/scripts.js'
                    ));
                    break;
                default:
                     Assets::js(array(
                        '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js',
                        '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js',
                        Url::templatePath() . 'js/moment.min.js',
                        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js',
                        Url::templatePath() . 'js/bootstrap-datetimepicker.min.js',
                        Url::templatePath() . 'js/patternfly.min.js',
                        Url::templatePath() . 'js/scripts.js'
                    ));
                    break;
            }
    
    //hook for plugging in javascript
    $hooks->run('js');
    //hook for plugging in code into the footer
    $hooks->run('footer');

?>

<script>
    $(function() {
        $('.sidebar-pf').css({ minHeight: $(window).innerHeight() + 'px' });
        $(window).resize(function() {
            $('.sidebar-pf').css({ minHeight: $(window).innerHeight() + 'px' });
        });
     });

     $(document).ready(function() {
         $('.sidebar-pf').css({ minHeight: $(window).innerHeight() + 'px' });
     });

</script>

</body>
</html>
