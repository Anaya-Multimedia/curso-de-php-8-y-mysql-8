<?php
namespace Controllers;
use Services\ContactosService;
use Lib\Pages;

class ContactosController {

    private ContactosService $service;
    private Pages $pages;

    function __construct(){
        $this->service = new ContactosService();
        $this->pages = new Pages($this);
    }

    public function list(): void {
        $contactos =  $this->service->findAll();
        $filasAfectadas = $this->service->filasAfectadas();
        $this->pages->render('contactos', [
            'contactos' => $contactos,
            'filasAfectadas' => $filasAfectadas
        ]);
    }

    public function add(): void {
        $this->pages->render('contacto');
    }

    public function save(): void {
        $contacto = $_POST['data'];
        $contacto['Contacto']['familia'] = 1 ?? 0;
        $this->service->save($contacto);
        header('Location: /015/contactos');
    }

    public function edit(int $id): void {
        $contacto = $this->service->read($id);
        $this->pages->render('contacto', ['contacto' => $contacto]);
    }

    public function delete(int $id): void {
        $this->service->delete($id);
    }

}