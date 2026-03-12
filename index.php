<!DOCTYPE html>
<html>
<body>
 
<?php
$nombre = "John";
$edad = 24;
$peso = 85.3;
$soltero = false;
$estado = ($soltero)? "soltero" : "casado";

// echo "$nombre de edad: $edad con peso de $peso Kg es $estado";

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

?>



</body>
</html>