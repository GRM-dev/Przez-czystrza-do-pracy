<?php

include_once('User.php');

function login()
{
    var_dump($_POST);
    sleep(3);
    if (empty($_POST['email']))
    {
        echo ("Nie podałeś maila!");
        return false;
    }

    if(empty($_POST['password']))
    {
        echo ("Nie podałeś hasła!");
        return false;
    }
    $username = trim($_POST['email']);
    $password = trim($_POST['password']);
    $pswds = sha1(md5($password));
    if(User::login($username, $pswds)) {
        echo "____" . $username . $pswds;
        header("Status: 301 Moved Permanently");
        header("Location:?page=home");
        return true;
    }
    echo 'zle haslo!';
    return false;
}


login();