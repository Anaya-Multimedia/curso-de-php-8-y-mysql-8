<?php
namespace Services;
use Repositories\ContactosRepository;

class ContactosService {

    private ContactosRepository $repository;

    function __construct(){
        $this->repository = new ContactosRepository();
    }

    public function findAll(): ?array {
        return $this->repository->findAll();
    }

    public function save(array $contacto): void {
        $this->repository->save($contacto);
    }

    public function read(int $id){
        return $this->repository->read($id);
    }

    public function delete(int $id){
        return $this->repository->delete($id);
    }

    public function filasAfectadas(): int{
        return $this->repository->filasAfectadas();
    }

}