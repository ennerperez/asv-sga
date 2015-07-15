<?php
    
    use Core\View;
    
    use Helpers\Session;
    
?>


<?php
    if (Session::get('loggin') == true) { View::render('admin/alertas', $data); }
?>

