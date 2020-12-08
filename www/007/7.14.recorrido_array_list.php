<?php
$alimentos = array( array("manzana", "piña", "melón", "plátano"),
                    array("carne", "pescado", "pasta"),
                    array("tarta de manzana", "tiramisú", "tarta 3 chocolates"));
foreach($alimentos as $indice => list($a, $b, $c)) {
    echo "Valores del indice: $indice :: $a, $b, $c <br/>";
}
