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

?>
<div class="content-section-a">
    <?php var_dump($adverts); ?>
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
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="First Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Last Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Username" disabled></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($adverts as $adv) {

                    }; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
