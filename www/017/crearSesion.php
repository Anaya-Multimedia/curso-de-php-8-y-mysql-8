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
        <h1 class="card-title">Creando una Sesión</h1>
      </div>
      <div class="card-body">
        El identificador de la sesión es: <?=session_id()?>
      </div>
      <div class="card-footer text-end">
        <a href='eliminarSesion.php'>Destruir Sesión</a>
      </div>
    </div>
  </div>
</body>
</html>