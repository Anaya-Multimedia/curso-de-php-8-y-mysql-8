<pre>
<?php
require_once  "../config.php";
$conexionPDO = new PDO("mysql:host=".SERVIDOR.";dbname=".BASE_DATOS.";charset=utf8", USUARIO, PASS);
$consulta = "INSERT INTO contactos (nombre, apellidos, direccion, telefono, correo) 
    VALUES (:nombre, :apellidos, :direccion, :telefono, :correo)";
$sentencia = $conexionPDO->prepare($consulta);
$sentencia->bindValue( ":nombre", 'María' );
$sentencia->bindValue( ":apellidos", 'Ródena' );
$sentencia->bindValue( ":direccion",  'Av.Valhondo 3-2B');
$sentencia->bindValue( ":telefono",  '600330000');
$sentencia->bindValue( ":correo",  'maria@micorreo.es');
$sentencia->execute();
echo "El último id es " . $conexionPDO->lastInsertId();
?>
</pre>