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

echo $result->choices[0]->message->content;

echo 33

?>
