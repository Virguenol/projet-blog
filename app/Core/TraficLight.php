<?php

namespace App\Core;



class TraficLight {
    private $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        return $this->color = $color;
    }

    public function redLight():string
    {
        return "Stop le feu est rouge";
    }

    public function orangeLight():string
    {
        return "Attention alentir le feu passe bientôt au rouge";
    }

    public function greenLight()
    {
        return "le le feu est vert rouler";
    }

}
