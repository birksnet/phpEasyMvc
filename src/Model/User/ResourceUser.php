<?php

namespace Birksnet\Magebirks\Model\User ;

use NumberFormatter;

class ResourceUser {

    protected $users = [];


    public function addUser($user_name,$password,$email=Null){
        if ( $this->userExixts($user_name) ){
            echo " Usuario já exixte !";
            exit;
        }
        if ($password == Null){
            echo "Passwor não pode ser vasiu !";
            exit;
        }
        $this->users = [$user_name => new \Birksnet\Magebirks\Model\User\User($user_name,$password,$email) ];
    }

    protected function userExixts(string $user_name)
    {
        return array_key_exists($user_name,$this->users);
    }

    public function getUsers()
    {
        return $this->users;
    }
}