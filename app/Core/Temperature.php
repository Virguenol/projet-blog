<?php

namespace App\Core;

use phpDocumentor\Reflection\Types\Boolean;

use function PHPUnit\Framework\returnSelf;

class Temperature
{
    public function __construct()
    {

    }

    public function validate(string $format): bool
    {
       // $format = true;

        if ($format == '°' || $format == 'F') {
            return true;
        } else {
            return false;
        }

    }

    public function convert(float $value, string $format)
    {
        if($format == 'F') {
         return $value = ($value * 1.8) + 32;
        }

        if($format == '°') {
            return $value = ($value - 32) * 5/9;
        }
    }
}
