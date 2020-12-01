<?php
$iva = 21;

$calculaIVA = function ($valor) use ($iva) {
    return $valor + ($valor * $iva/100);
};

$precio_mascarillas = 5;

echo "Si una mascarilla cuesta $precio_mascarillas, tendremos que pagar {$calculaIVA($precio_mascarillas)} iva incluido";