<?php
$cadena_español = "Bienvenidos al mundo de la programación";
$cadena_ruso = "Добро пожаловать в мир программирования";
$cadena_árabe = "مرحبا بكم في عالم البرمجة";
$cadena_chino_tradicional = "歡迎來到編程世界";
$cadena_coreano = "프로그래밍의 세계에 오신 것을 환영합니다";

echo "<b>$cadena_español</b> tiene " . strlen($cadena_español) . " bytes y " . mb_strlen($cadena_español) . " caracteres<br/>";
echo "<b>$cadena_ruso</b> tiene " . strlen($cadena_ruso) . " bytes y " . mb_strlen($cadena_ruso) . " caracteres<br/>";
echo "<b>$cadena_árabe</b> tiene " . strlen($cadena_árabe) . " bytes y " . mb_strlen($cadena_árabe) . " caracteres<br/>";
echo "<b>$cadena_chino_tradicional</b> tiene " . strlen($cadena_chino_tradicional) . " bytes y " . mb_strlen($cadena_chino_tradicional) . " caracteres<br/>";
echo "<b>$cadena_coreano</b> tiene " . strlen($cadena_coreano) . " bytes y " . mb_strlen($cadena_coreano) . " caracteres<br/>";