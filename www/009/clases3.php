<?php
class Persona {
  protected string $nombre;
  protected string $apellido1;
  protected string $apellido2;
  
  function setNombre(string $nombre) {
    $this->nombre = $nombre;
  }
  
  function getNombre() {
    return $this->nombre;
  }
  
  function setApellidos(string $apellido1, string $apellido2) {
    $this->apellido1 = $apellido1;
    $this->apellido2 = $apellido2;
  }
  
  function getApellidos() {
    return $this->apellido1 . " " . $this->apellido2;
  }
}

class PersonaUSA extends Persona {
    protected $id;
    
   function setId(string $id) {
      $this->id = $id;
    }
    
    function getId() {
      return $this->id;
    }
    
    function getApellidos() {
      return $this->apellido2 . " " . $this->apellido1;
    }
}

function cambiaNombre(Persona $persona, string $nombre) {
  $persona->setNombre($nombre);
}

class PersonaEspaña extends Persona {

    private $dni;

    function setDni(string $dni) {
        $this->dni = $dni;
      }
      
      function getDni() {
        return $this->dni;
      }

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