<?php
/**
 * Created by PhpStorm.
 * User: dhanushka
 * Date: 4/26/18
 * Time: 8:12 PM
 */





class Dbh{

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect() {
        $this->servername = "localhost";
        $this->username   = "root";
        $this->password   = "";
        $this->dbname     = "cms";
        $this->charset    = "utf8mb4";

        try {

            $dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

            return $pdo;


        } catch (PDOException $e) {

            echo "Connection failed:".$e->getMessage();

        }


    }

}






















