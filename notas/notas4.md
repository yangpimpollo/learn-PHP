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


  ## video 12 (Creación de bot interactivo)

  1. creamos la carpeta `bin` para los ejecutables dentro creamos un archivo `ai` sin extensión

 ```php

#!/usr/bin/env php
<?php

echo 'Ask anything to AI' . PHP_EOL;

while (true) {
    $input = readline('> ');

    if ($input === 'exit' || $input === '') {
        break;
    }  

    echo 'Thinking...' . PHP_EOL;

    sleep(2);

    echo 'Fake response: ' . $input . PHP_EOL;
}

```

  2. en la carpeta donde se trabaja ejecuta en la terminal `php bin/ai` para correr el programa
  3. hay otra manera de ejecutar el programa mediante  `./bin/ai` pero no funciona si no le cambiamos permiso primero para acceder
     con `chmod +x bin/ai` (autorizar a linux ejecutar el ejecutable) y colocar `#!/usr/bin/env php` (linea de interprete indicaciones de como procesar)al inicio 

```bash
    yangpimpollo@PC--086:~/carpeta1$ ./bin/ai
    Ask anything to AI
    > hello : )
    Thinking...
    Fake response: hello : )
    > exit
    yangpimpollo@PC--086:~/carpeta1$ 
```
    > 🆘✅❇️  [ **BUENA PRACTICA** ]                       
    Si haces el chmod +x y luego haces un git commit, la próxima vez que descargues el proyecto en otra PC (o alguien más lo haga), el archivo ya tendrá el permiso de ejecución y no habrá que repetirlo. ✨