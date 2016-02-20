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
        $mysqli->set_charset("utf8");
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
        return mysqli_fetch_all($result);
    }

    public function add_advert(){
        $mysqli = $this->get_connection();

    }

    public function cred_valid($username, $paswd){
        $mysqli = $this->get_connection();

    }

    public function reg_user($username, $paswd){
        $mysqli = $this->get_connection();

    }

    public function get_url(){
        $mysqli = $this->get_connection();
        $sql = "SELECT * FROM urls";
        if (!$result = $mysqli->query($sql)) {
            echo "Sorry, the website is experiencing problems.";
            echo "Error: Our query failed to execute and here is why: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }
        return mysqli_fetch_all($result);

    }

    public function get_category(){
        $mysqli = $this->get_connection();
        $sql = "SELECT * FROM categories";
        if (!$result = $mysqli->query($sql)) {
            echo "Sorry, the website is experiencing problems.";
            echo "Error: Our query failed to execute and here is why: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }
        return mysqli_fetch_all($result);

    }

    public function get_province(){
        $mysqli = $this->get_connection();
        $sql = "SELECT * FROM provinces";
        if (!$result = $mysqli->query($sql)) {
            echo "Sorry, the website is experiencing problems.";
            echo "Error: Our query failed to execute and here is why: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }
        return mysqli_fetch_all($result);

    }

    public function get_mails(){
        $mysqli = $this->get_connection();
        $sql = "SELECT * FROM mails";
        if (!$result = $mysqli->query($sql)) {
            echo "Sorry, the website is experiencing problems.";
            echo "Error: Our query failed to execute and here is why: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }
        return mysqli_fetch_all($result);

    }
}
