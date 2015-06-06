<?php
    use Core\Language;
?>

<div class="container">

    <div class="page-header">
        <h1><?php echo $data['title'] ?></h1>
    </div>
    <p><?php echo $data['welcome_message'] ?></p>
    <p><?php
        
        if ($data['entries']) {
            foreach ($data['entries'] as $entry )
            {
                 echo '<p>';
                    echo $entry->nombre;
                 echo '</p>';
            }
         }
        ?>
    </p>

</div>