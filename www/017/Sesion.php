<?php

class Sesion{

  function __construct(){
    session_start();
  }

  public function getVariable(string $variable): mixed{
    if(isset($_SESSION[$variable])){
      return $_SESSION[$variable];
    }
    return null;
  }

  public function setVariable(string $variable, mixed $valor): void{
    if(isset($_SESSION[$variable])){
      $_SESSION[$variable] = $valor;
    }
  }

  public function terminarSesion(): void{
    $_SESSION = [];
    session_regenerate_id(TRUE); 
    session_destroy();
    header("Location:login.html");
  }
}