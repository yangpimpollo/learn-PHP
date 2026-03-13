<?php

namespace App;

class FruitAIservice 
{
    public function getResponse(string $input): string 
    {
        echo 'Thinking...' . PHP_EOL;
        sleep(2);
        return 'Fake response: ' . $input ;
    }
}