<?php

namespace Birksnet\Magebirks\Model\User;

class User{

    protected $name ;
    protected $user_name ;
    protected $password ;
    protected $email ;

    public function __construct($name_,$password_,$email_)
    {
        $this->setName($name_);
        $this->setPassword($password_);
        $this->setEmail($email_);
    }
    
    public function getName()
    {
        return $this->name;
    }
    public function setName($name_)
    {
       $this->name = $name_;
    }

    
    public function getUserName()
    {
        return $this->user_name;
    }
    public function setUserName($user_name_)
    {
       $this->user_name = $user_name_;
    }
    

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password_)
    {
       $this->password = $password_;
    }


    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email_)
    {
       $this->email = $email_;
    }

}