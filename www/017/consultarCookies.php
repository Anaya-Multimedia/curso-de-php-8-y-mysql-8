<!DOCTYPE html>
<html>
<head>
  <title>Cookies</title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-3">
    <h1>Consultando Cookies</h1>
    <ul class="list-group">
      <?php foreach ($_COOKIE as $cookieNombre=>$cookieValor):?>
      <li class="list-group-item">Cookie '<?=$cookieNombre?>' con valor <?=$cookieValor?></li>
      <?php endforeach;?>
      <li class="list-group-item">
        <div class="row">
          <div class="col text-end">
            <a href='crearCookies.php'>Crear cookies</a>
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