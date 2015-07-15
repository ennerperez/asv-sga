<?php
    
    use Core\Language;
    use Core\View;
    
    use Helpers\Session;
    
    $menu = new Language();
    $menu->load('Menu');
    
?>

<?php if (Session::get('loggin') == true) { View::render('admin/perfil'); } ?>