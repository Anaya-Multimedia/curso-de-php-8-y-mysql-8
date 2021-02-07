<?php
require_once  "../config.php";
$conexionPDO = new PDO("mysql:host=".SERVIDOR.";dbname=".BASE_DATOS.";charset=utf8", USUARIO, PASS);
try {
  $conexionPDO->beginTransaction();
  $consulta = "UPDATE contactos SET familia = 0 WHERE id = :id";
  $sentencia = $conexionPDO->prepare($consulta);
  $sentencia->bindValue(":id", 1);
  $sentencia->execute();
  $sentencia->bindValue(":id", 2);
  $sentencia->execute();
  $sentencia->bindValue(":id", 3);
  $sentencia->execute();
  $conexionPDO->commit();
  echo "Filas actualizadas";
} catch ( PDOException $e ) {
  $conexionPDO->rollBack();
  echo "Hubo algún error en la transacción " . $e->getMessage();
}