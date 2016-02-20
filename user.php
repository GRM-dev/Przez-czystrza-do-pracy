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
        if ($DBi->valid_user($mail, $pswd)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $mail;
            return true;
        }
        return false;
    }

    public static function register($mail, $pswd){
        $DBi = new Database();
        return $DBi->add_user($mail,$pswd);
    }
}
