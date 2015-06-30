<table id="datatable" class="display table table-responsive table-condensed table-striped table-hover table-bordered"  width="100%" data-page-length="10">
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