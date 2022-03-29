<?php 


namespace Birksnet\Magebirks\Core\Page;

class Page {

/*  */
    protected $header =[];
    protected $footer = [];
    protected $session;

    public function __construct(
        \Birksnet\Magebirks\Core\Session\Session $session
    )
    {
        $this->session = $session;
    }

    public function load(string $page)
    {   
        echo "<!DOCTYPE html> \n<html> \n<head> \n";
        $this->printHeader();
        echo "\n<head> \n<body>\n";
        $this->setBody($page);
        echo "\n<body> \n</html>";
    }

    public function setHeader($header)
    {
        $this->header[] = [$header];
    }

    protected function printHeader()
    {   
        
        foreach($this->header as $k => $v)
        {
            print("     ".$v[0]."\n");
        }
    }

    public function setBody($body)
    {

        include "/var/www/html/src/View/".$body.".phtml";
    }

}