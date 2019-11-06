<?php

use PHPUnit\Framework\TestCase;
use Connections\Connect;


//! guia para probar PDO database solo con PHPUNIT 
//! https://www.wingsquare.com/blog/phpunit-database-testing/
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