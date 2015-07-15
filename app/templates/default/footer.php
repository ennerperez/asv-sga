<?php
    use Helpers\Assets;
    use Helpers\Url;
    use Helpers\Hooks;
    //initialise hooks
    $hooks = Hooks::get();
?>

<footer>
    <div class="container-fluid">
        <b><?php echo SITETITLE; ?></b><br />
        <small>Equipo Nacional de Soporte Técnico C.S.S.N. - <?php echo date("Y"); ?> </small><br />
    </div>
</footer>

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
