<?php
    use Core\Language;
    use Core\View;
    
    use Helpers\Assets;
    use Helpers\Session;
    use Helpers\Url;
    use Helpers\Hooks;

	use Models\Inicio;
	
    //initialise hooks
    $hooks = Hooks::get();
			    
?>

<?php View::render('lists/anuncio', $data); ?>
<p><a href="#">Ver todos</a></p>


