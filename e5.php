<?php

$a = 500;
$b = 500;
$c = 500;
$d = 100;

if ($a > $b && $a > $c && $a > $d) {
    echo "<b>$a</b> Es el mayor";
} else if ($b > $a && $b > $c && $b > $d) {
    echo "<b>$b</b> Es el mayor";
} else if ($c > $a && $c > $c && $c > $d) {
    echo "<b>$c</b> Es el mayor";
} else if ($d > $a && $d > $c && $d > $d) {
    echo "<b>$d</b> Es el mayor";
} else if ($a==$b && $a==$c && $a==$d) {
    echo "Los 4 son iguales ( $a )";
} else {
    echo"Valores incorrectos o incalculados";
}
