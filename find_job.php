<?php
/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 2/20/2016
 * Time: 2:01 AM
 */

include_once('database.php');

$DB = new Database();
$jobs = $DB->get_jobs();

?>
<div class="content-section-a">
    <?php var_dump($jobs); ?>
    <table class="table">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>test</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        </tbody>
    </table>
</div>