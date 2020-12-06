<?php

function conectar()
{

    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "sistema_votos";
    $con = mysqli_connect($server, $user, $pass, $db) or die("Error al conectar a la base de datos");

    return $con;

}