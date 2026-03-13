# NOTAS DE APRENDIZAJE 5 PHP (●'◡'●)🤢

 ## video 16 (API key de OpenAI)

anteriormente trabajamos con el modelo instalado en local ahora pasamos a hacer consultas en nube 
1. similar a lo anterior instalamos openia en nuestro proyecto con composer con el comando `composer require openai-php/client` se modificara el archivo composer.json 
2. creamos una clase `OpenAIservice.php` dentro src revisar la documención de como implementarse en `https://github.com/openai-php/client`
3. pedimos el api key en la plataforma de openai for developers.

```php
 # OpenAIservice.php
<?php

namespace App;

use OpenAI;

class OpenAiservice 
{
    protected $client;                                         // no colocar el key directamente
    
    public function __construct() { $this->client = OpenAI::client('sk-proj-rNvBpCrNh....'); }

    public function getResponse(string $input): string                 
    {
        $result = $this->client->chat()->create([
            'model' => 'gpt-3.5-turbo', // 'gpt-3.5-turbo',gpt-4o-mini
            'messages' => [
                ['role' => 'user', 'content' => $input],
            ],
        ]);

        return $result['choices'][0]['message']['content'];
    }
}
 ```

 ```php
 # ai
#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\FruitAIservice;
use App\OllamaAIservice;
use App\OpenAIservice;

$aiService = new OpenAIservice();

echo 'Ask anything to AI' . PHP_EOL;

while (true) {

    $input = readline('> ');
    if ($input === 'exit' || $input === '') break;
    
    $response = $aiService->getResponse($input);
    echo $response . PHP_EOL;
    
}
 ```
> No funciona por que es un servicio de paga💸😂

 ## video 17 (variables de entorno)

1. creamos un anchivo `.env` que no se subira a git y uno `.env.example` de ejemplo para subir en .gitignore debemos añadir *.env* para que no se suba
2. ejecutamos el comando `composer require vlucas/phpdotenv` se modificara el archivo composer.json 
3. colocamos el key en .env `OPENAI_API_KEY=sk-proj-rNvBpCrNhgOupj... `

```php
public function __construct() { $this->client = OpenAI::client($_ENV['OPENAI_API_KEY']); }

// del codigo anterior remplazamos el key por la variable de entorno
```

```php
#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// añadir las 2 lineas anteriores nos dan la ubicacion de las variables y protegen a que no sea sobre escrita
```