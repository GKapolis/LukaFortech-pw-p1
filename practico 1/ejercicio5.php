<?php
//tabla a multiplicar
$tableof = 4;
//int para el while
$a = 1;
//tabla del 4 bucle for
for ($i = 1; $i <= 10; $i++) {
    echo $tableof . " por " . $i . " es igual a " . ($i*$tableof) . " <br>";
}
echo "<br>";
//tabla del 4 bucle while
while ($a <= 10) {
    echo $tableof . " por " . $a . " es igual a " . ($a*$tableof) . " <br>";
    $a++;
}
?>