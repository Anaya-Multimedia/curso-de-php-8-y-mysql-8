<!DOCTYPE html>
<html>
  <head>
    <title>Formulario Simple</title>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">  
  </head>
  <body>
    <div class = "container">
      <h1>Formulario con archivos</h1>
        <div class = "col-md-12 well">
          Nuevo Contacto: <?php echo $_POST[ 'nombre' ];?>
        </div>
        <div class = "col-md-12 well">
          Correo electrónico: <?php echo $_POST[ 'correo' ];?>
        </div>
        <div class = "col-md-12 well">
          Fichero recibido: 
          <div class = "col-md-12">Nombre:   <?= $_FILES[ "foto" ][ "name" ]?></div>
          <div class = "col-md-12">Tamaño:   <?= $_FILES[ "foto" ][ "size" ]?> bytes</div>
          <div class = "col-md-12">Temporal: <?= $_FILES[ "foto" ][ "tmp_name" ]?></div>
          <div class = "col-md-12">Tipo:     <?= $_FILES[ "foto" ][ "type" ]?></div>
          <div class = "col-md-12">Error:    <?= $_FILES[ "foto" ][ "error" ]?></div>
        </div>
    </div>
  </body>
</html>