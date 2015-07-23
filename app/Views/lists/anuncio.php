<?php
    use Core\Language;
    use Core\View;
?>

<ul class="list-group">
	<?php
		if ($data['entries']) {
			foreach ($data['entries'] as $entry )
            {
				echo '<a href="#" class="list-group-item">';
                echo '<h6 class="list-group-item-heading">'.$entry->titulo.'</h6>';
                echo '<p class="list-group-item-text">'.$entry->resumen.'</p>';
				echo '<br/>';
                echo '<small>'.date_format(date_create($entry->fecha),DATE_ATOM).'</small>';
                echo '</a>';
			}
		}
	?>
</ul>