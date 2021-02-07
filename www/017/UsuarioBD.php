<?php
require_once "Sesion.php";
require_once "BaseDatos.php";

class UsuarioBD {
  private array $usuarios;

  function __construct() {
    $servidor  = "mysql";
    $usuario = "root";
    $pass = "root";
    $base_datos = "MiBaseDeDatos";
    $esquema = new BaseDatos($servidor, $usuario, $pass, $base_datos);
    $esquema->consulta("SELECT * FROM usuarios");
    $this->usuarios = $esquema->extraer_todos();
  }

  public function existeUsuario(string $username): bool{
    foreach($this->usuarios as $usuario){
      if($usuario["username"] === $username){
        return true;
      }
    }
    return false;
  }

  public function comprobarClave(string $username, string $clave): bool{
    foreach($this->usuarios as $usuario){
      if($usuario["username"] === $username && $usuario["password"] == hash('sha256',$clave)){
        return true;
      }
    }
    return false;
  }

  private function getUsuario(string $username): array{
    foreach($this->usuarios as $usuario){
      if($usuario["username"] === $username){
        return $usuario;
      }
    }
    return [];
  }

  public function login(): void{
    if(isset($_POST["username"]) && isset($_POST["password"])){
      $username = $_POST["username"];
      $password = $_POST["password"];
      if($this->existeUsuario($username) && $this->comprobarClave($username, $password)){
        $_SESSION = $this->getUsuario($username);
      }else{
        header("Location:login.html");
      }
    }else{
      header("Location:login.html");
    }
  }

  public function logout(): void{
    $sesion = new Sesion();
    $sesion->terminarSesion();
    header("Location:login.html");
  }
}