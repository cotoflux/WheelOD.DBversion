<?php

import_once('functions/connect.php');

$consulta= "SELECT * FROM users WHERE killed = 0";
$db = mysqli_query( $con, $consulta);

