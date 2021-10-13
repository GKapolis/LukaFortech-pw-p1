<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $a = 0;
    $b = 0;



    for ($x = 0; $x <= 10; $x++) {
        echo $x . " ";
    }

    echo "<br>";

    while ($a <= 10) {
        echo $a . " ";
        $a++;
    }

    echo "<br>";

    for ($x = 0; $x <= 5; $x++) {
        echo ($x*2) . " ";
    }



    echo "<br>";

    while ($b <= 10) {
        echo $b . " ";
        $b = $b+2;
    }


    ?>

    <?php

    echo "<br>";

    $a = 0;
    $b = 2;
    function mandarcorreo() {
        echo "|se mando el correo| <br>";
    }

    do {
        mandarcorreo();
        $a++;
    } while ($a < $b);

    ?>

</body>
</html>

