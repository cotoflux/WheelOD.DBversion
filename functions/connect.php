
<?php

namespace Connections;

Class Connect
{

    public $con;
    private $hostname ="localhost";
    private $userName ="root";
    private $password = "password";
    private $database = "wheel1";
    
    function connectDB()
    {
        $con = mysqli_connect($this->hostname,$this->userName,$this->password, $this->database);

        if(mysqli_connect_errno()){
            echo "Failed to connect to the Data Base".mysqli_connect_error();
        }
        return $con;

    }
    
    function estoyConectado()
    {
        $connectado =$this->connectDB;

        if ($connectado) {
            return "Estoy conectado";
        }
    }
    
}



