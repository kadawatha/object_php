<?php


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





























































































