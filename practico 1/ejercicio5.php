<?php
$tableof = 4;
$a = 1;
for ($i = 1; $i <= 10; $i++) {
    echo $tableof . " por " . $i . " es igual a " . ($i*$tableof) . " <br>";
}
echo "<br>";
while ($a <= 10) {
    echo $tableof . " por " . $a . " es igual a " . ($a*$tableof) . " <br>";
    $a++;
}
?>