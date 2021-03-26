<?php
if ( isset( $usuario ) ) { 
  $nombreUsuario = $usuario;
}else{
  $nombreUsuario = "anónimo";
}
echo $nombreUsuario;