<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 11</title>
</head>
<body>

    <form action="ejercicio11.1.php" method="post">
        <input type="text" name="name" placeholder="inserte su nombre">
        <input type="text" name="surname" placeholder="inserte su apellido">
        <input type="text" name="age" placeholder="inserte su edad">
        <button type="submit" name="submit">submit</button>
    </form>
    <br>
    <hr>
    <form action="ejercicio11.2.php" method="get">
        <input type="radio" id="SE" name="estudios" value="Sin Estudios">
        <label for="SE">Sin estudios</label><br>
        <input type="radio" id="EP" name="estudios" value="Estudios Primarios">
        <label for="EP">Estudios Primarios</label><br>
        <input type="radio" id="ES" name="estudios" value="Estudios Secundarios">
        <label for="ES">Estudios Secundarios</label> 
        <button type="submit" name="submit">submit</button>
    </form>
    <br>
    <hr>
    <br>
    <form action="ejercicio11.3.php" method="get">
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