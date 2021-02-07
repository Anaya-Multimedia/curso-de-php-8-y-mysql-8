<pre>
<?php
require_once  "../config.php";
$conexionPDO = new PDO("mysql:host=".SERVIDOR.";dbname=".BASE_DATOS.";charset=utf8", USUARIO, PASS);
$consulta = "SELECT id, nombre, apellidos FROM contactos WHERE id = :id";
$sentencia = $conexionPDO->prepare($consulta);
$sentencia->bindValue(":id", 1);
$sentencia->execute();
$contacto1 = $sentencia->fetch(PDO::FETCH_BOTH);
$sentencia->bindValue(":id", 2);
$sentencia->execute();
$contacto2 = $sentencia->fetch( PDO::FETCH_BOTH );
print_r( $contacto1 );
print_r( $contacto2 );
?>
</pre>