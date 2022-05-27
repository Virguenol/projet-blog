<?php

namespace App\Core;
// where is code comments????? :/
// code not well formatted
class Calculator {

    public function __construct()
    {

    }
    // @FIXME in english the name of the vars
    public function add(float $numero1, float $numero2){
        return $numero1 + $numero2;
    }

    public function mult(float $numero1, float $numero2){
        return $numero1 * $numero2;
    }
    // @FIXME in english sub
    public function sous(float $numero1, float $numero2){
        return $numero1 - $numero2;
    }

    // @FIXME and division????
}
