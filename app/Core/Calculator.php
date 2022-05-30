<?php

namespace App\Core;

use Exception;
/**
 * @author Archange <virguenolngot@gmail.com>
 *
 * class
 */
class Calculator {

    public function __construct()
    {

    }
    /**
     * Addition function
     *
     * @param float $number1
     * @param float $number2

     */
    public function addition(float $number1, float $number2)
    {
        return $number1 + $number2;
    }

    /**
     * Multiplication function
     *
     * @param float $number1
     * @param float $number2
     * @return void
     */
    public function multiplication(float $number1, float $number2):float
    {
        return $number1 * $number2;
    }

    /**
     * Subtraction function
     *
     * @param float $number1
     * @param float $number2
     */
    public function substraction(float $number1, float $number2): float
    {
        return $number1 - $number2;
    }

    /**
     * Division function
     *
     * @param float $number1
     * @param float $number2

     */
    public function division(float $number1, float $number2): float
    {
        if($number2 == 0) {
           throw new Exception();
        } else {
            return $number1 / $number2;
        }

    }

}
