<?php
//Se extrae el usuario
$usuario_id = $_GET['usuario_id'];
try {
  if(!usuario_valido($usuario_id)) {
    echo "ERROR: El usuario $usuario_id no existe";
  } else {
    echo "CORRECTO: El usuario $usuario_id existe";
  }
} catch (Exception $ex) {
    $mensaje = ($ex->getMessage());
    echo $mensaje;
}

function usuario_valido($usuario_id) {
  $cadena = "usr";
  if ((strstr($usuario_id, $cadena) == false) || (strpos($usuario_id, $cadena) != 0 )) {
    throw new Exception("Usuario $usuario_id no empieza por usr_");
  } 
  if (strlen($usuario_id) < 9 ) {
    throw new Exception("Usuario $usuario_id tiene menos de 9 caracteres");
  }
  if (existe_base_datos($usuario_id)) {
    return true;
  } else {
    throw new Exception("Usuario $usuario_id no existe en la base de datos");
  }
}