<?php

namespace App\Core;

/**
 * @author Archange <virguenolngot@email.com>
 * Car class and these methods
 */
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
    /**
     * Car mark accessors and mutators
     */
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
     * Acceleration function
     *
     * @return string
     */
    public function rolled(): string
    {
        return "la voiture roule";
    }

    /**
     * Accelerate function
     *
     * @param [type] $speed
     * @return string
     */
    public function accelerate($speed):string
    {
        $speed *= 5;

        return "la voiture va plus vite et la vitesse est maintenant a $speed";
    }

    /**
     * Brake function
     *
     * @param [type] $speed
     * @return string
     */
    public function brake($speed):string
    {
        $speed *= 0;

        return "la voiture a freiner";
    }
}
