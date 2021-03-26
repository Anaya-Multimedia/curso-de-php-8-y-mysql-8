<?php
function recorre($numeros) {
    foreach($numeros as $indice => $valor) {
        echo "$indice :: $valor <br/>";
    }
}

$numeros = array("cinco" => 5, "uno" => 1, "tres" => 3, "cinco" => 5, "dos" => 2);

echo "Array sin ordenar <br/>";
echo "<hr/>";
recorre($numeros);
echo "Ordenación asort() <br/>";
echo "<hr/>";
asort($numeros);
recorre($numeros);
echo "Ordenación arsort() <br/>";
echo "<hr/>";
arsort($numeros);
recorre($numeros);
echo "Ordenación ksort() <br/>";
echo "<hr/>";
ksort($numeros);
recorre($numeros);
echo "Ordenación krsort() <br/>";
echo "<hr/>";
krsort($numeros);
recorre($numeros);
echo "Ordenación sort() <br/>";
echo "<hr/>";
sort($numeros);
recorre($numeros);
echo "Ordenación rsort() <br/>";
echo "<hr/>";
rsort($numeros);
recorre($numeros);