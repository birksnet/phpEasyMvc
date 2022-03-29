<?php

namespace Birksnet\Magebirks\Controllers;

class Teste extends \Birksnet\Magebirks\Core\Page\Page {


    public function __construct()
    {   
        parent::__construct( new \Birksnet\Magebirks\Core\Session\Session );
    }

    public function execute ()
    {   
        $this->setHeader("<title> Pagina de Teste </title>");
        $this->load("teste");
    }



}