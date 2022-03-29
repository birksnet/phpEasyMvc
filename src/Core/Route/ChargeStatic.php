<?php


namespace Birksnet\Magebirks\Core\Route;

class ChargeStatic{

    const FIlE_DIR = '../src/Controllers/';
    protected $file_names = [];
    private $ruote;

    public function __construct(
        \Pecee\SimpleRouter\SimpleRouter  $simpleRouter
    )
    {
        
        $this->ruote = $simpleRouter;
        $this->listFiles(self::FIlE_DIR);
        $this->chargeClass();
    }

    private function chargeClass()
    {    
        $rotas = [];
        $n=0;
        foreach ($this->file_names as $k => $v){
            $name = strtolower(str_replace('.php','',$v[$n]));  

            if($v[$n] == "Index.php"){
                $name = "";  
            }

            $name_ = str_replace('.php','',$v[$n]);
            if(preg_match("/Post/s",$name_)){
                $this->ruote::form("/".str_replace("post","",$name), ["\Birksnet\Magebirks\Controllers\\".$name_ , 'execute']);
            }else{
                $this->ruote::get("/".$name, ["\Birksnet\Magebirks\Controllers\\".$name_ , 'execute']);
            }
            
            $n++;
        }

        $this->ruote::start();
    }

    protected function listFiles($dir)
    {
        $files = scandir($dir);
        $n=0;
        foreach($files as $k => $v ){
            if( preg_match("/\.php/s",$v) ){
                if( $v != 'ChargeRoute.php'){
                    $this->file_names[] = [$n=>$v];
                    $n++;
                }
            }
        }
    }

    public function getFiles(){
        echo "<pre>";
        print_r($this->file_names[0]);
    }

    protected function getHeader(){
        echo"<!DOCTYPE html> \n<html> \n<head> \n";
        foreach ($this->page_header as $k => $v )
        {
            echo "  ".$v."\n";
        }
        echo "</head> \n<body>  \n";
    }

    protected function getFooter(){
        echo"\n</body> \n";
        foreach ($this->page_footer as $k => $v )
        {
            echo "  ".$v."\n";
        }
        echo "</html> \n";
    }

    public function setHeader($valor)
    {
        $this->page_header = [$valor];
    }

}