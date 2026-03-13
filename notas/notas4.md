# NOTAS DE APRENDIZAJE 4 PHP (●'◡'●)🐧

 ## video 11 (Autocarga de clases)

 para evitar importar a cada rato `require classA.php` utilizamos `composer` para autocargar

 1. creamos carpeta `src` solo dejamos index.php y composer.json externamente lo demas dentro
 2. creamos `composer.json` que siempre dirige automáticamente al src

 ```json
 # composer.json
 {
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}
 ```
 3. ejecutar en comando `composer dump-autoload` para activar autocarga se crea carpeta `vendor`
 4. en `index.php` modificamos require 'vendor/autoload.php' y en los demas archivos `namespace App;`
    
    > 🆘✅❇️  [ **BUENA PRACTICA** ]                                    
    `require_once` evitar cargar el mismo archivo dos veces                                    
    `__DIR__` ruta absoluta Evita errores de "File not found"

 ```php
 # index.php
 <?php
    require_once __DIR__ . '/vendor/autoload.php';
    use App\Fruit;
    use App\FruitType;


 # Fruit.php y FruitType.php
<?php

namespace App;

 ```
 5. creamos `.gitignore` y ponemos `/vendor` para que no suba vendor
