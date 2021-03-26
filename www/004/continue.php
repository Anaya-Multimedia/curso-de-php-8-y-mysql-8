<?php
for($x = 1; $x < 20; $x++) {
    if($x == 10) {
        continue;
    } else {
        echo $x . "<br/>";
    }
}