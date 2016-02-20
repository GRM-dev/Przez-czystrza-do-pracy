<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 2016-02-20
 * Time: 13:38
 */
include_once('Database.php');

$DB = new Database();
$adverts = $DB->get_content();
$user = $DB->get_user($_SESSION['mail']);
?>
<div class="container" style="padding:10%">
    <table class="table display dataTable dtr-inline collapsed bordered table-striped">
        <thead>
        <tr style="font-weight: bolder;">
            <th data-field="id">Link do oferty</th>
            <th data-field="name">Zaznacz</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $date_now = date('Y-m-d');
        $date_end = date_parse($adverts[9]);
        if ((empty($adverts[9]) || $date_end < $date_now) && ($user[0] == $adverts[1] || $user[3] == 1)) {
            echo '<tr><td>' . $adverts[2] . '</td><td><label><input type="checkbox" name="' . $adverts[0] . '">Wybierz</label></td></tr>';
        }
        ?>
        </tbody>
    </table>

    <form id="usun" class="navbar-form navbar-right" method="post" accept-charset='UTF-8' action="">
        <input class="btn btn-primary" type="submit" value="Wykonaj"/>
    </form>
</div>
