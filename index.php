<?php
include "Config/conexion.php";

$con = conectar();
//echo "se conecto de manera exitosa";
?>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title> VOTACIONES </title>

  <!-- Bootstrap core CSS -->
  <link href="Asset\css\bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="Asset\css\style.css" rel="stylesheet" type="text/css">

</head>

<body>

  <div class="cold-md-2"></div>
  <div class="col-md-10">
    <form class="form-signin">
      <img class="mb-4" src="Asset/img/indexico1.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal text-center">VOTACIONES 2020</h1>
      <label for="inputEmail" class="sr-only">USUARIO</label>
      <input type="email" id="inputusuario" class="form-control" placeholder="USUARIO" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Contrasena</label>
      <input type="password" id="inputcontrasena" class="form-control" placeholder="Contrasena" required="">
      <button class="btn btn-lg btn-primary btn-warning" type="submit">INICIAR</button>
  </div>
  </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="Asset\js\bootstrap.min.js"></script>


</body>

</html>