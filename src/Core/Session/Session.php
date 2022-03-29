<?php 

namespace Birksnet\Magebirks\Core\Session ;

class Session {

    protected $sessions = [];

    public function __construct()
    {
          session_start();
          $this->addSessionId();
    }

    protected function addSessionId()
    {
   
        if( $this->authSession() == false ){
            $session_id= substr( md5(uniqid(rand(), true)), 0, 8);
            $this->sessions[] = [ $session_id => [] ];
            $_SESSION["BIRKS"] = $this->getSessions();
            return;
        }
            $this->sessions = $_SESSION['BIRKS'];
    }

    public function getSessions()
    {
        return $this->sessions;
    }

    public function setSession(array $session)
    {

    }  

    public function getSessionId()
    {
        return $this->authSession();
    }

    protected function authSession()
    {
        foreach( $_SESSION["BIRKS"][0] as $k => $v )
        {
            return $k;
        }
        return false;
    }

}