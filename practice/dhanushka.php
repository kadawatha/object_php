<?php
/**
 * Created by PhpStorm.
 * User: dhanushka
 * Date: 4/26/18
 * Time: 9:32 PM
 */

class dhanushka
{


private $server;
private $username;
private $password;
private $dbname;

protected function skydigital(){

    $this->server="localhost";
    $this->username="root";
    $this->password="";
    $this->dbname="cms";

    $jayaweera= new mysqli($this->server,$this->username,$this->password,$this->dbname);
    return $jayaweera;


}





}



class gayan extends dhanushka{



    protected function gayan_function(){

        $sql="SELECT * FROM users";
        $result=$this->skydigital()->query($sql);
        $x=$result->num_rows;

        if ($x > 0){


            while ($row=$result->fetch_assoc()){

                $data[]=$row;

            }


            return $data;

        }





    }






}



class view extends gayan{


    public function view_function(){

        $datas=$this->gayan_function();


        foreach ($datas as $data){

            echo $data['user_email'];
            echo $data['username'];



        }





    }




}


$users=new view();
$users->view_function();


























































































