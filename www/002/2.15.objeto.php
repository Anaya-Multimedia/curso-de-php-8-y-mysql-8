<?php

class Tomate {
    private $tipo;
    function __construct($tipo) {
        $this->tipo = $tipo;
    }
}

class Lechuga {}

class Receta {

    private $ingredientes;
 
    public function incluir(object $ingrediente){
        $this->ingredientes[] = $ingrediente;
    }
}

$tomatePera = new Tomate('Pera');
$tomateCherry = new Tomate('Cherry');
$lechuga = new Lechuga();
$ensalada = new Receta();
$ensalada->incluir($tomatePera);
$ensalada->incluir($tomateCherry);
$ensalada->incluir($lechuga);