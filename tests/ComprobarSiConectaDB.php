<?php

use PHPUnit\Framework\TestCase;
use Connections\Connect;

class ComprobarSiConectaDB extends TestCase
{
    public function testEstoyBienConectadaALaBD()
    {
        $connect = new Connect();
        $mensajeQueEsperamos = "Estoy conectado";
        $notConnected = $connect->estoyConectado();
        $this->assertEquals($mensajeQueEsperamos, $notConnected);
    }    
}