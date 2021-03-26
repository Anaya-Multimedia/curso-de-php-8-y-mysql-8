<?php
$directores = [];
echo (count($directores) == 0)? "ok":"not ok";
echo "<br>";
$directores[] = "Martin Scorsese";
echo (count($directores) == 1)? "ok":"not ok";