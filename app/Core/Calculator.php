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
<<<<<<< HEAD
     */
    public function addition(float $number1, float $number2): float
=======
<<<<<<< HEAD
     */
    public function addition(float $number1, float $number2): float
=======
     * @return void
     */
    public function addition(float $number1, float $number2)
>>>>>>> a05477f (ajout des commentaire)
>>>>>>> refs/remotes/origin/master
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
<<<<<<< HEAD
    public function multiplication(float $number1, float $number2): float
=======
<<<<<<< HEAD
    public function multiplication(float $number1, float $number2): float
=======
    public function multiplication(float $number1, float $number2)
>>>>>>> a05477f (ajout des commentaire)
>>>>>>> refs/remotes/origin/master
    {
        return $number1 * $number2;
    }

    /**
     * Subtraction function
     *
     * @param float $number1
     * @param float $number2
<<<<<<< HEAD
     */
    public function substraction(float $number1, float $number2): float
=======
<<<<<<< HEAD
     */
    public function substraction(float $number1, float $number2): float
=======
     * @return void
     */
    public function substraction(float $number1, float $number2)
>>>>>>> a05477f (ajout des commentaire)
>>>>>>> refs/remotes/origin/master
    {
        return $number1 - $number2;
    }

    /**
     * Division function
     *
     * @param float $number1
     * @param float $number2
<<<<<<< HEAD
     */
    public function division(float $number1, float $number2): float
=======
<<<<<<< HEAD
     */
    public function division(float $number1, float $number2): float
=======
     * @return void
     */
    public function division(float $number1, float $number2)
>>>>>>> a05477f (ajout des commentaire)
>>>>>>> refs/remotes/origin/master
    {
        if($number2 == 0) {
           throw new Exception();
        } else {
            return $number1 / $number2;
        }

    }

}
