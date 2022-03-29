<?php

namespace Birksnet\Magebirks\Controllers ;

class Index  extends \Birksnet\Magebirks\Core\Page\Page { 


    public function __construct()
    {
       parent::__construct( new \Birksnet\Magebirks\Core\Session\Session );
    }

    public function execute()
    {   
        print_r($this->session->getSessions());
        $this->setHeader('<meta charset="utf-8">');
        $this->setHeader('<meta name="viewport" content="width=device-width, initial-scale=1">');
        $this->setHeader(' <link rel="stylesheet" href="http://localhost:4545/static/login.css">');
        $this->setHeader('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">');
        $this->setHeader('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>');
        $this->setHeader("<title> Login Administração </title>");
        $this->load("index");
    }

}