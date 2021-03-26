<?php
function recorre($numeros) {
    foreach($numeros as $indice => $valor) {
        echo "$indice: $valor <br/>";
    }
}

$numeros = array("uno" => 1, "dos" => 2, "tres" => 3, "cuatro" => 4);
echo "Números <br/>";
echo "<hr/>";
recorre($numeros);
echo "Números intercambiados <br/>";
echo "<hr/>";
recorre(array_flip($numeros));