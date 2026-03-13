<?php

namespace App;

class FruitAIservice implements ServiceInterface
{
    public function getResponse(string $input): string 
    {
        echo 'Thinking...' . PHP_EOL;
        sleep(2);
        return 'Fake response: ' . $input ;
    }
}