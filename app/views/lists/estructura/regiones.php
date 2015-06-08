<table class="table table-responsive table-condensed table-striped table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if ($data['entries']) {
                foreach ($data['entries'] as $entry )
                {
                    echo '<tr>';
                    echo '<td>'.$entry->nombre.'</td>';
                    echo '</tr>';
                }
            }
        ?>
    </tbody>
</table>