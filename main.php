<?php
if(isset($_GET['page'])){
    $page=$_GET['page'];
}else{
    $page='home';
}

switch($page){
    case 'home':
        include 'home.php';
        break;
    case 'user':
        echo '<div id="content">';
        include 'user.php';
        echo '</div>';
        break;
    case 'new_adv':
        echo '<div id="content">';
        include 'new_adv.php';
        echo '</div>';
        break;
    case 'find_job':
        echo '<div id="content">';
        include 'find_job.php';
        echo '</div>';
        break;
    case 'info':
        echo '<div id="content">';
        include 'info.html';
        echo '</div>';
        break;
}