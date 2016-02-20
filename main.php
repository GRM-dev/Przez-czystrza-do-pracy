<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

switch ($page) {
    case 'home':
        include 'home.php';
        break;
    case 'user':
        echo '<div id="content">';
        include 'User.php';
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
    case 'registerUser';
        echo '<div id="content">';
        include 'registerUser.php';
        echo '</div>';
        break;
    case 'userChangePwd';
        echo '<div id="content">';
        include 'userChangePwd.php';
        echo '</div>';
        break;
    case 'adminChangeUserPwd';
        echo '<div id="content">';
        include 'adminChangeUserPwd.php';
        echo '</div>';
        break;
    case 'registerAdvertisment';
        echo '<div id="content">';
        include 'registerAdvertisment.php';
        echo '</div>';
        break;
    case 'deleteAdvertisment';
        echo '<div id="content">';
        include 'deleteAdvertisment.php';
        echo '</div>';
        break;
}