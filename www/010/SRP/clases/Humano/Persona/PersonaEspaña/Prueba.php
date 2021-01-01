<?php

namespace clases\Humano\Persona\PersonaUSA;

class Prueba {

    function __construct(string $nombre) {
        $this->nombre = $nombre;
    } 

    public function diHola() {
        echo "Hola $this->nombre";
    }
}