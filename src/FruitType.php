<?php

namespace App;

enum FruitType: string
{
    case SWEET = 'sweet';
    case ACIDIC = 'acid';

    public function label(): string
    {
        return match ($this) {
            self::SWEET => 'sweet fruit',
            self::ACIDIC => 'acid fruit',
        };
    }
}


?>