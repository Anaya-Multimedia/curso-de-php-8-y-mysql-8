<!DOCTYPE html>
<html>
  <head>
    <title>Formulario Saneado</title>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">  
  </head>
  <body>
    <div class = "container">
      <h1>Formulario saneado</h1>
      <div class = "col-md-12 well">
        <form role = "form" id = "myForm" action = "validarFormulario.php" method = "post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombreHelp" minLength = "5" required = "true">
              <div id="nombreHelp" class="form-text">Introduce el nombre completo</div>
            </div>
            <div class="mb-3">
              <label for="nombre" class="form-label">Edad</label>
              <input type="text" class="form-control" id="edad" name="edad" aria-describedby="edadHelp" required = "true">
              <div id="edadHelp" class="form-text">Introduce tu edad</div>
            </div>
            <div class="mb-3">
              <label for="nombre" class="form-label">Página web</label>
              <input type="text" class="form-control" id="web" name="web" aria-describedby="webHelp" required = "true">
              <div id="webHelp" class="form-text">Introduce tu página web</div>
            </div>
            <div class="mb-3">
              <label for="correo" class="form-label">Correo electrónico</label>
              <input type="text" class="form-control" id="correo" name="correo" >
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </body>
</html>