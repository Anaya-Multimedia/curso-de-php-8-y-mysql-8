<?php
namespace Repositories;
//use Lib\BaseDatos;
use Lib\PDOMysql;
use Models\Contacto;

class ContactosRepository {

    //private BaseDatos $conexion;
    private PDOMysql $conexion;

    function __construct(){
        //$this->conexion = new BaseDatos();
        $this->conexion = new PDOMysql();
    }

    public function findAll(): ?array{
        $this->conexion->consulta("SELECT * FROM contactos");
        return $this->extraer_todos();
    }

    private function extraer_registro(): ?Contacto {
        return ($contacto = $this->conexion->extraer_registro())?Contacto::fromArray($contacto):null;
    }

    private function extraer_todos(): ?array {
        $contactos = [];
        $contactosData = $this->conexion->extraer_todos();
        foreach($contactosData as $contactoData){
            $contactos[] = Contacto::fromArray($contactoData);
        }
        return $contactos;
    }

    public function save(array $contacto): void {
        if( isset($contacto['Contacto']['id']) ){
            $this->update($contacto);
        } else {
            $this->create($contacto);
        }
    }
    
    private function create(array $contacto): void {
        $fields = implode(',',array_keys($contacto['Contacto']));
        $values = implode("', '",$contacto['Contacto']);
        $this->conexion->consulta("INSERT INTO contactos ($fields) VALUES ('$values')");
    }
    
    private function update(array $contacto): void {
        $updates = [];
        foreach($contacto['Contacto'] as $field=>$value){
            $updates[] = "$field='{$value}'";
        }
        $changes = implode(', ', $updates);
        $this->conexion->consulta("UPDATE contactos SET $changes WHERE id = ".$contacto['Contacto']['id']);
    }

    public function read(int $id): ?Contacto{
        $this->conexion->consulta("SELECT * FROM contactos WHERE id=$id");
        return $this->extraer_registro();
    }

    public function delete(int $id): void{
        $this->conexion->consulta("DELETE FROM contactos WHERE id=$id");
    }

    public function filasAfectadas(): int{
        return $this->conexion->filasAfectadas();
    }

}