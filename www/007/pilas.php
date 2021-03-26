<?php
$pila_informaticos_celebres = array();
array_push($pila_informaticos_celebres, "Kent Beck", "Bárbara Liskov", "Martin Fowler", "Ada Lovelace");
array_push($pila_informaticos_celebres, "Robert C. Martin");
while ($valor = array_pop($pila_informaticos_celebres)) {
    echo "Se ha extraído a $valor <br/>";
}