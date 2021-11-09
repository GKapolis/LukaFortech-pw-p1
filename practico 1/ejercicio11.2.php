<?php


if(ISSET($_GET["submit"])) {
    //recivo estudios
    $name = $_GET["estudios"];

    //imprimo estudios
    switch($name) {
        case "Sin Estudios":
            echo "usteden no tiene estudios";
            break;
        default :
            echo "usted posee " . $name;
            break;
    }

}
else {
    header("location: ../index.php");
    exit();
}


?>