<?php

namespace App\Core;
<<<<<<< HEAD
// where is code comments????? :/
// code not well formatted
=======

use Exception;
/**
 * @author Archange <virguenolngot@gmail.com>
 *
 * class
 */
>>>>>>> a05477f (ajout des commentaire)
class Calculator {

    public function __construct()
    {

    }
<<<<<<< HEAD
    // @FIXME in english the name of the vars
    public function add(float $numero1, float $numero2){
        return $numero1 + $numero2;
=======
    /**
     * Addition function
     *
     * @param float $number1
     * @param float $number2
     * @return void
     */
    public function addition(float $number1, float $number2)
    {
        return $number1 + $number2;
>>>>>>> a05477f (ajout des commentaire)
    }

    /**
     * Multiplication function
     *
     * @param float $number1
     * @param float $number2
     * @return void
     */
    public function multiplication(float $number1, float $number2)
    {
        return $number1 * $number2;
    }
<<<<<<< HEAD
    // @FIXME in english sub
    public function sous(float $numero1, float $numero2){
        return $numero1 - $numero2;
=======

    /**
     * Subtraction function
     *
     * @param float $number1
     * @param float $number2
     * @return void
     */
    public function substraction(float $number1, float $number2)
    {
        return $number1 - $number2;
    }

    /**
     * Division function
     *
     * @param float $number1
     * @param float $number2
     * @return void
     */
    public function division(float $number1, float $number2)
    {
        if($number2 == 0) {
           throw new Exception();
        } else {
            return $number1 / $number2;
        }

>>>>>>> a05477f (ajout des commentaire)
    }

    // @FIXME and division????
}
