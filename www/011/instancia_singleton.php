<?php
require_once("singleton.php");
$singleton = Singleton::getInstancia();
echo $singleton->getContador() . "<br>";
$singleton->incrementar();
$singleton2 = Singleton::getInstancia();
$singleton2->getContador();
echo $singleton->getContador() . "<br>";
echo $singleton2->getContador() . "<br>";