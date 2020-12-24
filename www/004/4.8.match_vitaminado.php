<?php

$edad = 23;

$categoria_futbol = match (true) {
    $edad <= 5 => 'Chupetín',
    $edad >= 7 => 'Pre-Benjamín',
    $edad >= 9 => 'Benjamín',
    $edad >= 11 => 'Alevín',
    $edad >= 13 => 'Infantil',
    $edad >= 15 => 'Cadete',
    $edad >= 18 => 'Juvenil',
    default => 'Senior',
};

echo "La categoría es: $categoria_futbol";