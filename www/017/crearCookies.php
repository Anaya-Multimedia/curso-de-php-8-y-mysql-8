<?php setcookie ( "color_fondo", "red" );?>
<?php setcookie ( "color_texto", "black", time()+60 );?>
<?php setcookie ( "columnas", 3 );?>
<?php setcookie ( "filas", 4 );?>
<!DOCTYPE html>
<html>
<head>
    <title>Cookies</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
      <h1>Creando Cookies</h1>
      <ul class="list-group">
        <li class="list-group-item">Creada cookie 'color_fondo' con valor 'red'</li>
        <li class="list-group-item">Creada cookie 'color_texto' con valor 'black' que expira en 60 seg.</li>
        <li class="list-group-item">Creada cookie 'columnas' con valor 3</li>
        <li class="list-group-item">Creada cookie 'filas' con valor 4</li>
        <li class="list-group-item">
            <div class="row">
                <div class="col text-end">
                    <a href='consultarCookies.php'>Consultar cookies</a>
                </div>
                <div class="col">
                    <a href='eliminarCookies.php'>Eliminar cookies</a>
                </div>
            </div>
        </li>
      </ul>
    </div>
  </body>
</html>