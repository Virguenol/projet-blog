<?php

namespace App\Core;


/**
 * The traffic light class
 *
 * @author Archange <virguenolngot@email.com>
 */
class TraficLight {

    /**
     * The constructor of the TraficLight class
     */
    public function __construct()
    {

    }

    public function setColorB()
    {
        $this->color;
    }

    /**
     * Function that returns the color of a traffic light
     *
     * @param [type] $color
     * @return string
     */
    public function coler($process): string
    {
        switch($process)
        {
            case 1:
                return "vert";
                break;
            case 2:
                return "orange";
                break;
            case 3:
                return "rouge";
                break;
            default :
            return "hors service";
        }

    }
}
