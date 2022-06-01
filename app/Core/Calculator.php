<?php

namespace App\Core;

use Exception;
use DivisionByZeroError;

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
    public function division($number1, $number2)
    {

        try {

            $result = $number1 / $number2;

            return $result;

        } catch (\DivisionByZeroError $e) {

            echo "La division par zéro n'est pas autorisée!\n";
            $e->getMessage();
        }

    }

}
