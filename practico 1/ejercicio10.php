<?php

// declaro array
$claves = array("jupiter"=>"3505", "zeus"=>"3741", "mercedes"=>"1243", "marcos"=>"1337", "gratis"=>"4143");

// llamo cada elemento por nombre
echo "Clave ".$claves["jupiter"]." <br>";
echo "Clave ".$claves["zeus"]." <br>";
echo "Clave ".$claves["mercedes"]." <br>";
echo "Clave ".$claves["marcos"]." <br>";
echo "Clave ".$claves["gratis"]." <br>";

// foreach loop que dice el nombre del elemento y su elemento
foreach($claves as $user => $user_clave) {
    echo "Usuario = " . $user . ", Contraseña = " . $user_clave;
    echo "<br>";
  }

?>