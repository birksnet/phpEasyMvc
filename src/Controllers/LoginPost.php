<?php

namespace Birksnet\Magebirks\Controllers;

class LoginPost extends \Birksnet\Magebirks\Core\Page\Page{

    public function __construct()
    {   
        parent::__construct(new \Birksnet\Magebirks\Core\Session\Session);
    }

    public function execute ()
    {   
       /*  print_r($_REQUEST);
        print_r($this->session->getSessions()); */
        $this->load("login/post");
    }



}