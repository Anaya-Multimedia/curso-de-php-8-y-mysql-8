<pre>
<?php
require_once  "../config.php";
$conexionPDO = new PDO("mysql:host=".SERVIDOR.";dbname=".BASE_DATOS.";charset=utf8", USUARIO, PASS);
$consulta = "SELECT id, nombre, apellidos FROM contactos WHERE id = :id";
$sentencia = $conexionPDO->prepare($consulta);
$sentencia->execute([':id' => 2 ]);
while($fila = $sentencia->fetch(PDO::FETCH_BOTH)) {
  print_r($fila).'<br>';
}
?>
</pre>