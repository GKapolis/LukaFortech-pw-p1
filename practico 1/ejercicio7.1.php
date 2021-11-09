<?php


if(ISSET($_POST["submit"])) {
    //recivo estudios
    $name = $_POST["estudios"];

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