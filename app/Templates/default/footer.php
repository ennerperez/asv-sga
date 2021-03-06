<?php
    use Helpers\Assets;
    use Helpers\Url;
    use Helpers\Hooks;
    use Helpers\Session;
    
    //initialise hooks
    $hooks = Hooks::get();
?>

<footer>
    <div class="container-fluid">
        <b><?php echo SITETITLE; ?></b><br />
        <small>Equipo Nacional de Soporte Técnico C.S.S.N. - <?php echo date("Y"); ?> </small><br />
    </div>
</footer>

<?php 
if (defined('ENVIRONMENT')) {
        switch (ENVIRONMENT) {
            case 'development':
                $usedata = Session::get('userdata');
                echo '<div class="alert alert-success">';
                echo '<h6>Depuración:</h6>';
                var_dump($usedata);
                echo '</div>'; 
                break;
        }
}
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



<?php    
    //if (ENVIRONMENT == 'development'){
    //    echo '<script>';
    //    echo 'javascript:(function(){var s=document.createElement("script");s.onload=function(){bootlint.showLintReportForCurrentDocument([]);};s.src="https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js";document.body.appendChild(s)})();';
    //    echo '</script>';
    //}
?>

</body>
</html>
