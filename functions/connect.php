<?php

namespace Connections;

class Connect
{

    public $con;
    private $hostname ="localhost";
    private $userName ="root";
    private $password = "";
    private $database = "wheel1";
    
    function connectDB()
    {
        $this->con = mysqli_connect($this->hostname,$this->userName,$this->password, $this->database);

        if(mysqli_connect_errno()){
            echo "Failed to connect to the Data Base".mysqli_connect_error();
        }
        return $this->con;

    }
    
    function estoyConectado()
    {
        $connectado =$this->connectDB();

        if ($connectado) {
            return "Estoy conectado";
        }
    }
    function veoLosVivos()
    {
        $sql = "SELECT * FROM users WHERE killed=0";
        $conexion = mysqli_query($this->con, $sql);
        return $conexion;
    }
}



