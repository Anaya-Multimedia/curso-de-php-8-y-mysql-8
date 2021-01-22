<pre>
<?php
require_once  "../config.php";
$conexionPDO = new PDO("mysql:host=".SERVIDOR.";dbname=".BASE_DATOS.";charset=utf8", USUARIO, PASS);
$resultado = $conexionPDO->query('call obtener_contactos()');
$filas = $resultado->fetchAll();
print_r($filas);
?>
</pre>