<?php
/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 2/20/2016
 * Time: 2:01 AM
 */

include_once('database.php');

$DB = new Database();
$adverts = $DB->get_adverts();
$regex = '~(http(s?)://)([^/]*)/?~';
?>
<div class="content-section-a">
    <div class="container">
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Users</h3>
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtruj</button>
                    </div>
                </div>
                <table id="jobs_table" class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Strona" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Kategoria" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Województwo" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Miasto" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Firma" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Stanowisko" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Data ogłoszenia" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Data wygaśnięcia" disabled></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($adverts as $advK => $adv) {
                        $link = '<a href="'.$adv[1].'">';
                        $end = '</a>';
                        preg_match($regex, $adv[1], $matches);
                        $site = $matches[0];
                        echo "<tr><td>".$link.$site.$end."</td><td>".$link.$adv[2].$end."</td><td>".$link.$adv[3].$end."</td><td>".$link.$adv[4].$end."</td><td>";
                        echo $link.$adv[5].$end."</td><td>".$link.$adv[6].$end."</td><td>".$link.$adv[7].$end."</td><td>";
                        echo $link.$adv[8].$end."</td><td>".$link.$adv[9].$end."</td></tr>";
                    }; ?>
                    </tbody>
                </table>
                <script>
                    $('tr[data-href]').on("click", function() {
                        document.location = $(this).data('href');
                    });
                </script>
                <script>
                    $(document).ready(function(){
                        $('#jobs_table').DataTable();
                    });
                </script>
            </div>
        </div>
    </div>
</div>
