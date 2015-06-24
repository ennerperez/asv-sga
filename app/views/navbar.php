<?php
    
    use Core\Language;
    use Core\View;
    
    use Helpers\Session;
    
    //$menu = new Language();
    //$menu->load('Menu');
    
?>

<ul class="nav navbar-nav navbar-primary">

    <?php if (Session::get('loggin') == true) { View::render('admin/navbar');} ?>

</ul>