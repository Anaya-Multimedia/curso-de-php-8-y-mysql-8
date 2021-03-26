<?php
for($x=1, $y=1, $z=1; $y < 10, $z < 10; $x++, $y = $y + 2, $z = $z + 3) {
    echo "x :: $x, y :: $y, z :: $z <br/>";
}