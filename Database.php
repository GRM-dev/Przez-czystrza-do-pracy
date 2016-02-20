<?php
include_once('config.php');

class Database
{
    private function get_connection()
    {
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

    public function get_content()
    {
        $mysqli = $this->get_connection();
        $sql = "SELECT * FROM `site_content`";
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

    public function valid_user($email, $paswd)
    {
        $mysqli = $this->get_connection();
        $sql = "SELECT * FROM `users` WHERE `email` LIKE '" . $email . "' AND `pass` LIKE '" . $paswd . "'";
        if (!$result = $mysqli->query($sql)) {
            echo "Sorry, the website is experiencing problems.";
            echo "Error: Our query failed to execute and here is why: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }
        $row = mysqli_fetch_row($result);
        if (isset($row)) {
            return TRUE;
        } else {
            return FALSE;
        }

    }

    public function add_content($id_category, $id_province, $id_user, $city, $company, $position, $url, $date_start, $date_stop)
    {
        $mysqli = $this->get_connection();
        $end = NULL;
        if (isset($date_stop)) $end = $date_stop;
        $sql = "INSERT_INTO `content` (`id_category`, `id_province`, `id_user`, `city`, `company`, `position`, `url`, `date_start`, `date_stop`) VALUES ('" . $id_category . "', '" . $id_province . "', '" . $id_user . "', '" . $city . "', '" . $company . "', '" . $position . "', '" . $url . "', '" . $date_start . "', '" . $end . "')";
        if (!$result = $mysqli->query($sql)) {
            echo "Sorry, the website is experiencing problems.";
            echo "Error: Our query failed to execute and here is why: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }
    }

    public function add_user($username, $paswd)
    {
        $mysqli = $this->get_connection();
        $sql = "INSERT INTO users (email, pass) VALUES ('" . $username . "', '" . $paswd . "');";
        if (!$result = $mysqli->query($sql)) {
            echo "Sorry, the website is experiencing problems.";
            echo "Error: Our query failed to execute and here is why: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            return false;
        }
        return true;
    }

    public function add_category($category)
    {
        $mysqli = $this->get_connection();
        $sql = "INSERT INTO `categories` (`category`) VALUES (" . $category . "')";
        if (!$result = $mysqli->query($sql)) {
            echo "Sorry, the website is experiencing problems.";
            echo "Error: Our query failed to execute and here is why: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }
    }

    public function add_function($function)
    {
        $mysqli = $this->get_connection();
        $sql = "INSERT INTO `functions` (`function`) VALUES ('" . $function . "')";
        if (!$result = $mysqli->query($sql)) {
            echo "Sorry, the website is experiencing problems.";
            echo "Error: Our query failed to execute and here is why: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }
    }

    public function get_url()
    {
        $mysqli = $this->get_connection();
        $sql = "SELECT * FROM `urls`";
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

    public function get_category()
    {
        $mysqli = $this->get_connection();
        $sql = "SELECT * FROM `categories`";
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

    public function get_province()
    {
        $mysqli = $this->get_connection();
        $sql = "SELECT * FROM `provinces`";
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

    public function get_mails()
    {
        $mysqli = $this->get_connection();
        $sql = "SELECT * FROM `mails`";
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

    public function get_user($mail)
    {
        $mysqli = $this->get_connection();
        $sql = "SELECT * FROM users WHERE email LIKE '".$mail."'";
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

    public function get_stat()
    {
        $mysqli = $this->get_connection();
        $sql = "SELECT * FROM `statistics`";
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

    public function delete_content($id_content)
    {
        $mysqli = $this->get_connection();
        $sql = "DELETE FROM `content` WHERE `id_content` =" . $id_content;
        if (!$result = $mysqli->query($sql)) {
            echo "Sorry, the website is experiencing problems.";
            echo "Error: Our query failed to execute and here is why: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }
    }

    public function change_pass($id_user, $pass)
    {
        $mysqli = $this->get_connection();
        $sql = "UPDATE `users` SET `pass` = " . $pass . " WHERE `id_user` =" . $id_user;
        if (!$result = $mysqli->query($sql)) {
            echo "Sorry, the website is experiencing problems.";
            echo "Error: Our query failed to execute and here is why: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }
    }

    public function delete_user($id_user)
    {
        $mysqli = $this->get_connection();
        $sql = "DELETE FROM `users` WHERE `id_user` =" . $id_user;
        if (!$result = $mysqli->query($sql)) {
            echo "Sorry, the website is experiencing problems.";
            echo "Error: Our query failed to execute and here is why: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }
    }

}
