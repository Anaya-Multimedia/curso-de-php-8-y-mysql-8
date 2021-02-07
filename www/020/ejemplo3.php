<?php
$directores = [];
assertTrue(count($directores) == 0);
$directores[] = "Martin Scorsese";
assertTrue(count($directores) == 1);

function assertTrue($condition){
   echo ($condition)?"Assertion OK.":"Assertion failed.";
   echo "<br/>";
}