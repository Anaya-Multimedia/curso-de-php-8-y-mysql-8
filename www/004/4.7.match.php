<?php
$dia = 4;
echo match ($dia) {
  1 => "El día es Lunes",
  2 => "El día es Martes",
  3 => "El día es Miércoles",
  4 => "El día es Jueves",
  5 => "El día es Viernes",
  6 => "El día es Sábado",
  7 => "El día es Domingo",
  default => "El día de la semana es incorrecto",
};