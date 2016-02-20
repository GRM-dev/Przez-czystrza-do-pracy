<?php
include_once('Database.php');

class User
{

    public static function is_logged_in()
    {
        if (!empty($_SESSION['loggedin'])) {
            return $_SESSION['loggedin'];
        }
        return false;
    }

    public static function login($mail, $pswd)
    {
        $DBi = new Database();
        if ($DBi->valid_user($mail, $pswd)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['mail'] = $mail;
            return true;
        }
        return false;
    }

    public static function register($mail, $pswd)
    {
        $DBi = new Database();
        return $DBi->add_user($mail, $pswd);
    }
}
