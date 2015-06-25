<?php
    use Core\Language;
    use Core\View;
?>

<ul class="list-group">
	<?php
		if ($data['entries']) {
			foreach ($data['entries'] as $entry )
            {
				echo '<li class="list-group-item">';
                echo '<h3 class="list-group-item-heading">'.$entry->titulo.'</h3>';
                echo '<p class="list-group-item-text">'.$entry->resumen.'</p>';
				echo '<br/>';
                echo '<small>'.date_format(date_create($entry->fecha),DATE_ATOM).'</small>';
                echo '</li>';
			}
		}
	?>
</ul>