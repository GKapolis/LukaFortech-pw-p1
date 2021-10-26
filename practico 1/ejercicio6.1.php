<?php


if(ISSET($_GET["submit"])) {
    $name = $_GET["name"];
    $surname = $_GET["surname"];
    $age = $_GET["age"];

    $fullname = $name . " " . $surname;

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