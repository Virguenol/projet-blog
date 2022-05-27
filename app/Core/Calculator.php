<?php

namespace App\Core;

class Calculator {

    public function __construct()
    {

    }
    public function add(float $numero1, float $numero2){
        return $numero1 + $numero2;
    }

    public function mult(float $numero1, float $numero2){
        return $numero1 * $numero2;
    }

    public function sous(float $numero1, float $numero2){
        return $numero1 - $numero2;
    }

}
