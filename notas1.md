# NOTAS DE APRENDIZAJE 1 PHP 🚀

Resumen de **fundamentos de  PHP**. 

## 0. Nociones Basicas

* comentarios

```php
// de una linea
#  de una linea
/*  multilinea */
```
* variables         

```php
// (siempre con un $)
<?php
$nombre = "John";
$edad = 24;
$peso = 85.3;
$soltero = false;
$estado = ($soltero)? "soltero" : "casado";   // "shorthand" operador ternario

var_dump($soltero);   //tipo de dato

echo "$nombre de edad: $edad con peso de $peso Kg es $estado";
?>
```
> John de edad: 24 con peso de 85.3 Kg es casado                                        
> bool(false)

* impresion
```php
echo "Hello";     /* cualquier es valido */      echo("Hello");
echo "<h2>PHP is Fun!</h2>";     // etiquetas html
echo "Hola"." ".$nombre." "."como estas";    // concatenar con punto (.)
```


* Conversión de datos
```php
$value1 = 3.14;

$value2 = (int) $value1;
$value3 = (string) $value1;
```


* Condicionales
```php
if (condition) { } else { }
if (condition) { } elseif(condition) { }else {}
if (condition) ...;
   (condition)? true  false;
```

* Switch case
```php
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
```
> Your favorite color is red!
