<?php
function capitales($pais, $capital = "Madrid", $habitantes = "muchos") {
  return ("La capital de $pais es $capital y tiene $habitantes habitantes.<br/>");
}
echo capitales("España");
echo capitales("Portugal", "Lisboa");
echo capitales("Francia", "Paris", "muchísimos");