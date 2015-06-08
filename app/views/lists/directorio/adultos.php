
<table class="table table-responsive table-condensed table-striped table-hover">
    <thead>
        <tr>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if ($data['entries']) {
                foreach ($data['entries'] as $entry )
                {
                     echo '<tr>';
                        echo '<td>'.$entry->dni.'</td>';
                        echo '<td>'.$entry->nombre.'</td>';
                        echo '<td>'.$entry->apellido.'</td>';
                     echo '</tr>';
                }
             }
        ?>
    </tbody>
</table>