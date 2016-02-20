<?php

include_once('User.php');

function register()
{
    sleep(3);
    if (empty($_POST['email'])) {
        echo("Nie podałeś maila!");
        return false;
    }

    if (empty($_POST['password'])) {
        echo("Nie podałeś hasła!");
        return false;
    }
    if (empty($_POST['password_confirmation'])) {
        echo("Nie podałeś hasła po raz drugi!");

        return false;
    }
    if ($_POST['password'] != $_POST['password_confirmation']) {
        echo("Hasła nie są identyczne!");
        return false;
    }
    echo var_dump($_POST);
    $username = trim($_POST['email']);
    $password = trim($_POST['password']);
    $perm = trim($_POST['optradio']);
    $pswds = sha1(md5($password));
    if (User::register($username, $pswds, $perm)) {
        echo 'Registered!';
        header("Status: 301 Moved Permanently");
        header("Location:index.php?page=home");
        return true;
    }
    echo "Podany email już istnieje lub wystąpił problem z serwerem!";
    return false;
}

register();