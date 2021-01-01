<?php
require_once("clases2.php");

class PersonaEspaña extends Persona {

    public static function comprobarDni($dni) {
        $letras = explode(",", "T,R,W,A,G,M,Y,F,P,D,X,B,N,J,Z,S,Q,V,H,L,C,K,E");
        if ( strlen( $dni ) < 9) {
          $dni = "0" . $dni;
        }
        $numero = intval( $dni );
        $letra = strtoupper( substr( $dni, -1 ) );
        if ( strlen( $dni ) == 9 && $letra == $letras[ $numero % 23 ] ) {
          return true;
        } else {
          return false;
        }
      }         
}