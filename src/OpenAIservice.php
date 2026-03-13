<?php

namespace App;

use OpenAI;

class OpenAiservice implements ServiceInterface
{
    protected $client;
    
    public function __construct() { $this->client = OpenAI::client($_ENV['OPENAI_API_KEY']); }

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