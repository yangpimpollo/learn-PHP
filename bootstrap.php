<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$aiService = new  App\OllamaAIservice();
return new App\Chat($aiService);