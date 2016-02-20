<?php
/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 2/20/2016
 * Time: 2:01 AM
 */

include_once('database.php');

$DB = new Database();
$adverts = $DB->get_content();
$stats = $DB->get_stat();
$regex = '~(http(s?)://)([^/]*)/?~';
?>
<div class="content-section-a">
    <div class="container">
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Ogłoszenia</h3>
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter">
                            <span class="glyphicon glyphicon-filter"></span> Filtruj
                        </button>
                    </div>
                </div>
                <div>
                    <h4> Obecnie na stronie akcji znajduje się:
                        <ul>
                            <li>
                                <?php
                                    $linki = 'link';
                                    $os = $stats[0];
                                    if ($os == 0 || $os > 4){
                                        $linki = $linki.'ów';
                                    } elseif ($os > 0 && $os < 5) {
                                        $linki = $linki.'i';
                                    }
                                    echo ' '.$os.' '.$linki.' ';
                                ?>
                                dot. ofert pracy z zakresu ochrony środowiska
                            </li>
                            <li>
                                <?php
                                    $linki = 'link';
                                    $os = $stats[1];
                                    if ($soo == 0 || $soo > 4){
                                        $linki = $linki.'ów';
                                    } elseif ($soo > 0 && $soo < 5) {
                                        $linki = $linki.'i';
                                    }
                                    echo ' '.$soo.' '.$linki.' ';
                                ?> dot. ofert pracy związanych z innymi aspektami CSR/zrównoważonego rozwoju
                            </li>
                        </ul>
                    </h4>
                </div>
                <table class="table display dataTable dtr-inline collapsed bordered table-striped">
                    <thead>
                    <tr class="filters" style="font-weight: bolder;">
                        <th><input type="text" class="form-control" placeholder="Strona" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Kategoria" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Województwo" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Miasto" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Firma" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Stanowisko" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Ogłoszono" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Wygasa" disabled></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($adverts as $advK => $adv) {
                        $link = '<a href="' . $adv[2] . '">';
                        $end = '</a>';
                        preg_match($regex, $adv[2], $matches);
                        $site = $matches[0];
                        echo "<tr><td>" . $link . $site . $end . "</td>";
                        for ($i = 3; $i < 10; $i++) {
                            echo "<td>" . $link . $adv[$i] . $end . "</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
                <script src="js/vendor/jquery-1.12.0.min.js"></script>
                <script type="text/javascript" src="/js/vendor/jquery.tablesorter.js"></script>
                <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
            </div>
        </div>
    </div>
</div>
