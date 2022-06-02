<?php

namespace App\Core;



/**
 * @author Archange <virguenolngot@email.com>
 *
 *
 */

class Voiture {

    public function __construct()
    {

    }
    /**
     * nous retourne l'action de la voiture
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
