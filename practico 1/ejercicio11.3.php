<?php


if(ISSET($_GET["submit"])) {
    
    //recivo datos
    $name = $_GET["name"];
    $deportes = $_GET["deporte"] ?? "";
    $i = 0;

    //reviso si hay o no deportes
    if(empty($deportes)) 
    {
        //si no hay escribir esto
        $repuestadeportes = " no hace ningun deporte";
        echo $name . $repuestadeportes;
    } 
    else 
    {
        //guardo numero de deportes
        $ndeportes = count($deportes);
        //escribo lo que voy a decir
        $repuestadeportes = " hace " . $ndeportes . " deportes";
        //digo al usuario su mensaje
        echo $name . $repuestadeportes;
        //escribo los deportes
        foreach($deportes as $k) {
        $i++;
        echo "<br>".$i.") ".$k;
    }
    }

    

}
else {
    header("location: ../index.php");
    exit();
}


?>