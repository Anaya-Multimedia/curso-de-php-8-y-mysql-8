<?php
require_once "Sesion.php";

class Usuario {
  private array $usuarios;

  function __construct() {
    $this->usuarios = [
      [
        "username" => "guillermo",
        "password" => "guille2014",
        "nombre"   => "Guillermo",
        "apellido" => "González",
        "perfil"   => "Administrador",
        "telefono" => 999999999
      ],
      [
        "username" => "alejandro",
        "password" => "alejandro08",
        "nombre"   => "Alejandro",
        "apellido" => "Cabezas",
        "perfil"   => "Usuario",
        "telefono" => 888888888
      ],
    ];
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
      if($usuario["username"] === $username && $usuario["password"] == $clave){
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