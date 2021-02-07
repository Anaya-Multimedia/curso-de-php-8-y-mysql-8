<?php session_start();?>
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
        <h1 class="card-title">Consultando los datos de la sesión</h1>
      </div>
      <div class="card-body">
        <div class="row">
            Nombre: <?= $_SESSION["nombre"]?>
        </div>
        <div class="row">
            Profesión: <?= $_SESSION["profesion"]?>
        </div>
      </div>
      <div class="card-footer text-end">
        <a href = 'eliminarSesion.php'>Eliminar sesión</a>
      </div>
    </div>
  </div>
</body>
</html>