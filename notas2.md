# NOTAS DE APRENDIZAJE 2 PHP (●'◡'●)🍕

Resumen de **fundamentos de  PHP** de platzi

 ## video 01 (php sigue siendo relevante)

<img src="res/image.png" width="20%" style="float: left; margin-right: 100px;">

* 78% funciona con PHP (instagram, wikipedia, wordpress)
* facil integración
* principios SOLID
* ressultados inmediatos
* intgración con API

```php
# Que es solid ? reglas de diseño  orientadas a objetos
#    S - Single Responsibility (Responsabilidad Única)
#    O - Open/Closed (Abierto/Cerrado)
#    L - Liskov Substitution (Sustitución de Liskov)
#    I - Interface Segregation (Segregación de Interfaces)
#    D - Dependency Inversion (Inversión de Dependencias)
```


```php
<?php
require __DIR__ . '/bootstrap.php';

$client = OpenAI::client($_ENV['OPENAI_API_KEY']);

$result = $client->chat()->create([
    'model' => 'gpt-3.5-turbo',
    'messages' => [
        [
            'role' => 'user',
            'content' => 'cuando se llego la luna'
        ]
    ]
]);
?>
```
> no funciona 