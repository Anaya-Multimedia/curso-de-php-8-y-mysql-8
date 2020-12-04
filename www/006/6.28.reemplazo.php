<?php
$patron = "/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}/";
$texto = "El correo es de luis@gmail.com <br/>";
echo preg_replace($patron, "Luis Miguel", $texto);