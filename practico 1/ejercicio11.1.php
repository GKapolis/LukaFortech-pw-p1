<?php


if(ISSET($_POST["submit"])) {
    //RECIVO DATOS DEL FORMULARIO
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $age = $_POST["age"];

    //concateno nombres
    $fullname = $name . " " . $surname;

    //digo si mayor o menor de edad
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