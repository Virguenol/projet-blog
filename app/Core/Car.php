<?php

namespace App\Core;

/**
 * class of car
 * @author Archange <virguenolngot@email.com>
 */
class Car {


    /**
     * The car class builder
     */
    public function __construct()
    {

    }
    /**
     * Returns us the action of the car
     *
     * @param [type] $color
     * @return string
     */
    public function my_car($color):string
    {
        switch($color)
        {
            case 1 :
                return "avance";
                break;
            case 2 :
                return "ralentir";
                break;
            case 3 :
                return "arrêt";
                break;
            default :
                return "continu d'avancer";
        }

    }

}
