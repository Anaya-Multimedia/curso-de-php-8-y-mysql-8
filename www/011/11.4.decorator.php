<?php
class Libro {

    public function __construct(private string $autor, private string $titulo) {}

    public function getAutor() {
        return $this->autor;
    }

    public function getTitulo() {
        return $this->titulo;
    }
}

class LibroDecorator {

    private string $titulo;
    private string $autor;
    
    public function __construct(private Libro $libro) {
        
    }

    public function getAutor() {
        return $this->libro->getAutor();
    }

    public function getTitulo() {
        return $this->libro->getTitulo();
    }

    public function __toString() {
        return $this->getTitulo() . " || " . $this->getAutor();
    }
    
}

class LibroDecoratorExclamacion extends LibroDecorator {

    public function __construct(private LibroDecorator $librodecorado) {}

    public function __toString() {
        return "¡" . $this->librodecorado . "!";
    }
}

class LibroDecoratorEstrella extends LibroDecorator {

    public function __construct(private LibroDecorator $librodecorado) {}

    public function __toString() {
        return "****" . $this->librodecorado . "****";
    }
}

class LibroDecoratorAlReves extends LibroDecorator {

    public function __construct(private LibroDecorator $librodecorado) {}

    public function __toString() {
        return strrev($this->librodecorado);
    }
}

$libroTolkien = new Libro("El Hobbit", "J.R.R. Tolkien");
$libroTolkienDecorado = new LibroDecorator($libroTolkien);
$libroTolkienDecoradoExclamacion = new LibroDecoratorExclamacion($libroTolkienDecorado);
$libroTolkienDecoradoEstrella = new LibroDecoratorEstrella($libroTolkienDecorado);
$libroTolkienDecoradoAlReves = new LibroDecoratorAlReves($libroTolkienDecorado);

echo "<h4>Libro Original</h4>";
echo $libroTolkienDecorado;
echo "<h4>Libro Decorado con exclamación</h4>";
echo $libroTolkienDecoradoExclamacion;
echo "<h4>Libro Decorado con estrellas</h4>";
echo $libroTolkienDecoradoEstrella;
echo "<h4>Libro Decorado al revés</h4>";
echo $libroTolkienDecoradoAlReves;