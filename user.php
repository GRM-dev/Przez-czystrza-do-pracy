<?php
include_once('Database.php');
class User
{

    public static function is_logged_in()
    {
        return $_SESSION['loggedin'];
    }

    public static function login($mail, $pswd)
    {
        $DBi = new Database();
        if ($DBi->cred_valid($mail, $pswd)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $mail;
        }
    }
}
