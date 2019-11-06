<?php


use Connections\Connect;

$devolverVivos = new Connect();
$devolverVivos->connectDB();
$vivos=$devolverVivos->veoLosVivos();
return json_encode($vivos);

