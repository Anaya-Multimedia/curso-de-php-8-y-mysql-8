<?php
require_once "config.php";
require_once "autoloader.php";

use Lib\Router;
use Controllers\ContactosController;

Router::add('GET','/contactos', function (){
    return (new ContactosController())->list();
});

Router::add('GET','/contactos/contacto', function (){
    return (new ContactosController())->add();
});

Router::add('POST','/contactos/contacto', function (){
    return (new ContactosController())->save();
});

Router::add('GET', '/contactos/contacto/:id', function (int $contactoId){
    return (new ContactosController())->edit($contactoId);
});

Router::add('DELETE', '/contactos/contacto/:id', function (int $contactoId){
    return (new ContactosController())->delete($contactoId);
});

Router::dispatch();