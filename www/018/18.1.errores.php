<?php
//Se extrae el usuario
$usuario_id = $GET_['usuario_id'];
if(!usuario_valido($usuario_id)) {
  echo "ERROR: El usuario $usuario_id no existe";
} else {
  echo "CORRECTO: El usuario $usuario_id existe";
}

function usuario_valido($usuario_id) {
  $cadena = "usr";
  if((strstr($usuario_id, $cadena)) == false) || (strpos($usuario_id, $cadena) != 0 )){
    return false;
  } 
  if (strlen($usuario_id) < 9 ) {
    return false;
  }
  if (existe_base_datos($usuario_id)) {
    return true;
  } else {
    return false;
  }
}