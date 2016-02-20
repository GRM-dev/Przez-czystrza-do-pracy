<?php
include_once('config.php');

class Database
{
    private function get_connection(){
        $mysqli = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
        if ($mysqli->connect_errno) {
            echo "Sorry, this website is experiencing problems.";
            echo "Error: Failed to make a MySQL connection, here is why: \n";
            echo "Errno: " . $mysqli->connect_errno . "\n";
            echo "Error: " . $mysqli->connect_error . "\n";
            exit;
        }
        return $mysqli;
    }

    public function get_adverts()
    {
        $mysqli = $this->get_connection();
        $sql = "SELECT * FROM site_content";
        if (!$result = $mysqli->query($sql)) {
            echo "Sorry, the website is experiencing problems.";
            echo "Error: Our query failed to execute and here is why: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }
        return mysqli_fetch_assoc($result);
    }

    public function add_advert(){

    }

    public function cred_valid($username, $paswd){
        $mysqli = $this->get_connection();

    }
}