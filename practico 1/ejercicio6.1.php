<?php

//if que revisa el submit se haya ejecutado antes de entrar a la pagina

if(ISSET($_GET["submit"])) {
    //obtenemos los datos del form ulario
    $name = $_GET["name"];
    $surname = $_GET["surname"];
    $age = $_GET["age"];

    //juntamos nombre y apellido por motivos esteticos
    $fullname = $name . " " . $surname;

    //revisamos si es mayor o menor de dad y le comunicamos cual es al usuario en base al formulario
    if($age >= 18) {
        echo $fullname . " es mayor de edad";
    }
    else {
        echo $fullname . " es menor de edad";
    }

}
else {
    header("location: ../index.php");
    exit();
}


?>