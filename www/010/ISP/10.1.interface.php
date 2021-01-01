<?php
interface TelefonoMovil {
    public function fotografiar();
    public function dobleSim();
    public function escribirEnTeclado();
    public function escribirEnPantalla();
    public function wifi();
}

class iPhone implements TelefonoMovil {
    public function fotografiar() {}
    public function dobleSim() {}
    public function escribirEnTeclado() {}
    public function escribirEnPantalla() {}
    public function wifi() {}
}