<?php
namespace Models;

class Contacto {

    function __construct(
        private string $id,
        private string $nombre,
        private string $apellidos,
        private string $direccion,
        private string $telefono,
        private string $correo,
        private ?string $fecha_nacimiento,
        private bool $familia
    ){}

    public function getId(): int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }

    public function getApellidos(): string{
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos){
        $this->apellidos = $apellidos;
    }

    public function getDireccion(): string{
        return $this->direccion;
    }

    public function setDireccion(string $direccion){
        $this->direccion = $direccion;
    }

    public function getTelefono(): string{
        return $this->telefono;
    }

    public function setTelefono(string $telefono){
        $this->telefono = $telefono;
    }

    public function getCorreo(): string{
        return $this->correo;
    }

    public function setCorreo(string $correo){
        $this->correo = $correo;
    }
    
    public function getFechaNacimiento(): ?string{
        return $this->fecha_nacimiento;
    }

    public function setFechaNacimiento(?string $fecha_nacimiento){
        $this->fecha_nacimiento = $fecha_nacimiento;
    }
    
    public function getFamilia(): bool{
        return $this->familia;
    }

    public function setFamilia(bool $familia){
        $this->familia = $familia;
    }

    public static function fromArray(array $data): Contacto {
        return new Contacto(
            $data['id'],
            $data['nombre'],
            $data['apellidos'],
            $data['direccion'],
            $data['telefono'],
            $data['correo'],
            $data['fecha_nacimiento'],
            $data['familia'],
        );
    }
}