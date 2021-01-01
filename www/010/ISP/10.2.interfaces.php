<?php
interface Fotografiar {}

interface dobleSim {}

interface escribirEnTeclado {}

interface escribirEnPantalla {}

interface wifi {}


class iPhone implements Fotografiar, escribirEnPantalla, wifi {

}