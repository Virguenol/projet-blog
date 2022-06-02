<?php

namespace App\Core;

class FeuTricolor {

    protected $color;

    public function __construct()
    {

    }

    public function setColorB()
    {
        $this->color;
    }

    /**
     * nous return une couleur
     *
     * @param [type] $color
     * @return string
     */
    public function couler($color): string
    {
        switch($color)
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
