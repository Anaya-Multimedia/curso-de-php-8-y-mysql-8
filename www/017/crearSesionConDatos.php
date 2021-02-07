<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>Sesiones</title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class = "container mt-5">
    <div class="card">
      <div class="card-header">
        <h1 class="card-title">Creando una sesión con datos</h1>
      </div>
      <div class="card-body">
        <?php
          $_SESSION["nombre"] = "Guillermo González";
          $_SESSION["profesion"] = "Astronauta";
        ?>
        Datos de sesión creados.
      </div>
      <div class="card-footer text-end">
        <a href='consultarSesion.php'>Consultar datos de sesión</a>
      </div>
    </div>
  </div>
</body>
</html>