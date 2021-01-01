<?php

namespace clases\Humano\Persona\PersonaEspaña;


class Dni {
  private $numero;
  private $letra;
  private $dni;

  public function __construct(string $dni) {
    if(Dni::comprobarDni($dni)) {
      $this->dni = $dni;
      $this->numero = intval($dni);
      $this->letra = strtoupper(substr($dni,-1));
    }
  }

  public function getNumeroDni() {
    return $this->dni;
  }

  public static function comprobarDni(string $dni) {
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