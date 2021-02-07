<?php
require_once "Sesion.php";
//require_once "Usuario.php";
require_once "UsuarioBD.php";
$sesion = new Sesion();
//$usuario = new Usuario();
$usuario = new UsuarioBD();
$usuario->login();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sesiones</title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h1 class="card-title">Acceso permitido</h1>
      </div>
      <div class="card-body">
        <div class="row">Nombre: <?=$_SESSION["nombre"]?></div>
        <div class="row">Apellido: <?=$_SESSION["apellido"]?></div>
        <div class="row">Perfil: <?=$_SESSION["perfil"]?></div>
        <div class="row">Teléfono: <?=$_SESSION["telefono"]?></div>
      </div>
      <div class="card-footer text-end">
        <a href='logout.php'>Salir</a>
      </div>
    </div>
  </div>
</body>
</html>