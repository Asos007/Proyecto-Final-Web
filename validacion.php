<?php

$username = $_POST["user"];
$password = $_POST["passwords"];

session_start();

$_SESSION["user"] = $username;

$conn = mysqli_connect('localhost', 'root', '', 'sistema_votos');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$consulta = "SELECT * FROM usuarios WHERE user = '$username'  AND pass = '$password'";
$resultado = mysqli_query($conn, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas == 1) {
    header("Location: Sistem/menuprinci.php");

} else {
    include "index.php";
    echo '<script>alert("error de autentificacion")</script>';
}
mysqli_free_result($resultado);
mysqli_close($conn);