<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conversor de números binarios</title>
    <style>
        *{
            padding: 5px;
        }
    </style>
</head>
<body>
<h1>Conversor de número binarios</h1>
<h4>Instrucciones: Seleccionar primero el tipo de dato y luego introducir el número que desea convertir</h4>
<form  method="post">
<label for="numero">Introduzca el número
    <input type="number" name="numeros">
</label>
<br><br>
<label for="tipo">Seleccione el tipo
    <select name="tipo">
        <option value="Decimal">Decimal</option>
        <option value="Hexadecimal">Hexadecimal</option>
        <option value="Octal">Octal</option>
    </select>
</label>
    <br><br>
    <input type="submit" value="Convertir" name="Convertir"
    > <input type="submit" value="Limpiar" name="Limpiar">
</form>
<br><br>

<?php

if (isset($_POST['Convertir'])){
    $numero = $_POST['numeros'];
    switch ($_POST['tipo']){
        case 'Decimal': echo "<p> El resultado es: ".bindec($numero)."</p>";
        break;
        case 'Hexadecimal':echo "<p>El resultado es: ".dechex(bindec($numero))."</p>";
            break;
        case  'Octal': {
            echo "<p>El resultado es: ".decoct(bindec($numero))."</p>";
            break;
        }
        default: echo "Error, no has seleccionado un tipo";
    }

}
if (isset($_POST['Limpiar'])){
    echo"";

}





?>
</body>
</html>
