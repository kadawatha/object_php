<?php
/**
 * Created by PhpStorm.
 * User: dhanushka
 * Date: 4/26/18
 * Time: 8:13 PM
 */

include "Dbh.php";




class User extends Dbh{


    public function getAllUsers(){

        $stmt=$this->connect()->query("SELECT * FROM categories");
        while ($row=$stmt->fetch()){

            echo $uid=$row['cat_title'];

            return $uid;

        }


    }



}


$object=new User;
echo $object->getAllUsers();










