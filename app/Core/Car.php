<?php

namespace App\Core;

class Car {
    private $mark;
    private $color;
    private $speed;

    public function __construct($mark, $color, $speed)
    {
        $this->mark  = $mark;
        $this->color = $color;
        $this->speed = $speed;

    }

    public function getMark()
    {
        return $this->mark;
    }

    public function setMark($mark)
    {
        return $this->mark = $mark;
    }

    /**
     * Car color accessors and mutators
     */
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        return $this->color = $color;
    }

    /**
     * Car color accessors and mutators
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed)
    {
        return $this->speed = $speed;
    }

    /**
     * The methods of my car class
     *
     * The method the car starts
     */
    public function started():string
    {
        return "la voiture a demarer";
    }

    /**
     * acceleration function
     *
     * @return string
     */
    public function rolled(): string
    {
        return "la voiture roule";
    }

    public function accelerate($speed):string
    {
        $speed *= 5;

        return "la voiture va plus vite et la vitesse est maintenant a $speed";
    }

    public function brake($speed):string
    {
        $speed *= 0;

        return "la voiture a freiner";
    }
}
