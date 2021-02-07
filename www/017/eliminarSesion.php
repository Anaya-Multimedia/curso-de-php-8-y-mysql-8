<?php session_start(); // Accedemos a la sesión
$_SESSION = []; // Nos aseguramos de eliminar los datos de la sesión
session_regenerate_id(TRUE); // Forzamos a regenerar la cookie de sesión 
session_destroy(); // Eliminamos la sesión
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
        <h1 class="card-title">Eliminando una Sesión</h1>
      </div>
      <div class="card-body">
        Ya no existe la sesión.
      </div>
      <div class="card-footer text-end">
        <a href='crearSesion.php'>Crear sesión</a>
        <a href='crearSesionConDatos.php'>Crear sesión con datos</a>
      </div>
    </div>
  </div>
</body>
</html>