<?php

    use Core\View;
    
    use Helpers\Session;
    
?>

<div id="top"></div>
<nav  class="navbar navbar-default navbar-fixed-top scout-bg" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-1" aria-expanded="true">
                <span class="sr-only">Menú</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"></a>
            <p class="navbar-text visible-xs">Sistema de Gestión Administrativa</p>
        </div>
        <div class="collapse navbar-collapse navbar-collapse-1">
            <?php View::render('navbar', $data); ?>
            <ul class="nav navbar-nav navbar-right">
                <li >
                    <a href="http://www.scoutsvenezuela.org.ve/soporte/?v=submit_ticket" target="_blank" role="button" aria-expanded="false">
                        <span class="fa fa-at"></span><span class="hidden-sm">Soporte</span>
                    </a>
                </li>
                <li class="dropdown">
                    <?php View::render('alertas'); ?>
                </li>
                <li class="dropdown">
                    <?php View::render('perfil', $data); ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    $('.navbar-text').hide();
	
	$('.navbar-fixed-top').autoHidingNavbar({
		// disable auto-hide
		disableAutohide: false,
		
		// shows up when scrolling the page upwards
		showOnUpscroll: true,
		
		// shows up when scroll reaches the page's end.
		showOnBottom: true,
		
		// "auto" means the navbar height
		hideOffset: 'auto', 
		
		// The duration of the show and hide animations
		animationDuration: 300
	});
	
</script>