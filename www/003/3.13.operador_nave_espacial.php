<?php
// Enteros
echo 1 <=> 1; // 0
echo "<br/>";
echo 1 <=> 2; // -1
echo "<br/>";
echo 2 <=> 1; // 1
echo "<br/>";

// Flotantes
echo 1.5 <=> 1.5; // 0
echo "<br/>";
echo 1.5 <=> 2.5; // -1
echo "<br/>";
echo 2.5 <=> 1.5; // 1
echo "<br/>";
 
// Cadenas
echo "a" <=> "a"; // 0
echo "<br/>";
echo "a" <=> "b"; // -1
echo "<br/>";
echo "b" <=> "a"; // 1
