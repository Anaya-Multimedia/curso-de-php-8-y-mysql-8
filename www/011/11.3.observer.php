<?php

abstract class Observable {

    protected $observadores = array();

    public function registrarObservador($observador) {
        if(!in_array($observador, $this->observadores)) {
            $this->observadores[] = $observador;
        }
    }

    public function desregistrarObservador($observador) {
        if(in_array($observador, $this->observadores)) {
            $key = array_search($observador, $this->observadores);
            unset($this->observadores[$key]);
        }
    }

    abstract public function notificarObservadores();
}


class MiObservable extends Observable {
    
    public function notificarObservadores() {
        foreach($this->observadores as $observador) {
            $observador->notificar($this, $this->texto);
        }
    }

    public function Evento($texto) {
        $this->texto = $texto;
        $this->notificarObservadores();
    }
}


interface Observador {
  public function notificar($objeto, $mensaje);
}

class Log implements Observador {
  public function notificar($objeto, $mensaje) {
    echo $objeto::class . " envió el mensaje: $mensaje a las " . date('h:i:s', time()) . "<br/>";
  }
}

class LogMySQL implements Observador {
  public function notificar($objeto, $mensaje) {
    echo "Guardando en Base de datos. " . $objeto::class . " envió el mensaje: $mensaje a las " . date('h:i:s', time()) . "<br/>";
  }
}

$eventos = new MiObservable();
$eventos->registrarObservador(new Log());
$eventos->registrarObservador(new LogMySQL());
$eventos->Evento('Test 1');
sleep(2);
$eventos->Evento('Test 2');
 sleep(2);
$eventos->desregistrarObservador(new LogMySQL());
$eventos->Evento('Test 3');
$eventos->Evento('Test 4');
$eventos->Evento('Test 5');