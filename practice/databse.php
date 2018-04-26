<?php
/**
 * Created by PhpStorm.
 * User: dhanushka
 * Date: 4/26/18
 * Time: 9:04 PM
 */

class Dbh{

    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect(){

        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "cms";

        $conn =new mysqli($this->servername,$this->username,$this->password,$this->dbname);

        return $conn;


    }


}

class User extends Dbh{


    protected function getAllUsers(){

        $sql="SELECT * FROM users";
        $result=$this->connect()->query($sql);
        $numRows =$result->num_rows;

        if ($numRows>0){

            while ($row=$result->fetch_assoc()){
                $data[] = $row;
            }


            return $data;

        }


    }


}





class viewuser extends User{


    public function showAllUsers(){

        $datas = $this->getAllUsers();
        foreach ($datas as $data)
        {
            echo $data['user_firstname'].'<br>';
            echo $data['user_lastname'].'<br>';
        }

    }


}





$users =new ViewUser();

$users->showAllUsers();




































