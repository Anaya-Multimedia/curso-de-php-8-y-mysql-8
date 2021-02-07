<?php
$host     = "mysql";
$port     = 3306;
$socket   = "";
$user     = "root";
$password = "root";
$dbname   = "";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

print_r($con);

$con->close();
