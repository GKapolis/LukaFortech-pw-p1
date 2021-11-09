<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 8</title>
</head>
<body>
    <form action="ejercicio8.1.php" method="post">
        <input type="text" name="name" placeholder="inserte su nombre"><br />
        <input type="checkbox" name="deporte[]" value="Futbol" />Futbol<br />
        <input type="checkbox" name="deporte[]" value="Rugby" />Rugby<br />
        <input type="checkbox" name="deporte[]" value="Basket" />Basket<br />
        <input type="checkbox" name="deporte[]" value="Tennis" />Tennis<br />
        <input type="checkbox" name="deporte[]" value="Voley" />Voley<br />
        <input type="checkbox" name="deporte[]" value="E-Sport" />E-Sport
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>

