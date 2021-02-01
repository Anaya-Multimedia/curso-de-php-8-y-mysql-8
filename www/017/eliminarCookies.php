<?php setcookie("color_fondo","");?>
<?php setcookie("columnas","");?>
<?php setcookie("filas","");?>
<!DOCTYPE html>
<html>
<head>
  <title>Cookies</title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-3">
    <h1>Eliminando Cookies</h1>
    <ul class="list-group">
      <li class="list-group-item">Eliminada cookie 'color_fondo'</li>
      <li class="list-group-item">Eliminada cookie 'color_texto'</li>
      <li class="list-group-item">Eliminada cookie 'columnas'</li>
      <li class="list-group-item">Eliminada cookie 'filas'</li>
      <li class="list-group-item">
        <div class="row">
          <div class="col text-end">
            <a href='consultarCookies.php'>Consultar cookies</a>
          </div>
          <div class="col">
            <a href='crearCookies.php'>Crear cookies</a>
          </div>
        </div>
      </li>
    </ul>
  </div>
</body>
</html>