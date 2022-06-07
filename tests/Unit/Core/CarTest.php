<?php

namespace Tests\Unit\Core;


use App\Core\Car;
use PHPUnit\Framework\TestCase;

/**
 * @group car
 */
class CarTest extends TestCase
{
    /** @test */
    public function we_can_create_a_car()
    {
        $car = new Car('clio', 'vert', 100);
        $this->assertInstanceOf(Car::class, $car);

    }


    /**
     * Car brand Accessors and Mutators
     *
     * @test
     * */
    public function get_mark_car()
    {
        $car = new Car('clio', 'vert', 100);
        $car->getMark('clio');
        $this->assertEquals('clio', $car->getMark());
    }

    /** @test */
    public function set_mark_car()
    {
        $car = new Car('clio', 'vert', 100);
        $mark = 'toyota';
        $car->setMark($mark);
        $this->assertEquals($mark, $car->getMark());
    }

    /**
     * Car color Accessors and Mutators
     *
     * @test
     * */
    public function get_color_car()
    {
        $car = new Car('clio', 'vert', 100);
        $car->getColor('vert');
        $this->assertEquals('vert', $car->getColor());
    }

    /** @test */
    public function set_color_car()
    {
        $car = new Car('clio', 'vert', 100);
        $mark = 'rouge';
        $car->setColor($mark);
        $this->assertEquals($mark, $car->setColor($mark));
    }

    /**
     * Car speed accessors and mutators
     *
     * @test
     * */
    public function get_speed_car()
    {
        $car = new Car('clio', 'vert', 100);
        $car->getSpeed('100');
        $this->assertEquals(100, $car->getSpeed());
    }

    /** @test */
    public function set_speed_car()
    {
        $car = new Car('clio', 'vert', 100);
        $speed = '100';
        $car->setSpeed($speed);
        $this->assertEquals($speed, $car->setSpeed($speed));
    }

    /**
     * @test
     *
     */
    public function start_the_car()
    {
        $car = new Car('clio', 'vert', 100);
        $start = $car->started();
        $this->assertEquals('la voiture a demarer', $start);
    }

     /**
     * @test
     *
     */
    public function the_car_is_moving()
    {
        $car = new Car('clio', 'vert', 100);
        $roll = $car->rolled();
        $this->assertEquals('la voiture roule', $roll);
    }

    /**
     * @test
     *
     */
    public function the_car_is_accelerated()
    {
        $car = new Car('clio', 'vert', 100);
        $acceleration = $car->accelerate(100);
        $this->assertEquals("la voiture va plus vite et la vitesse est maintenant a 500", $acceleration);
    }

    /**
     * @test
     *
     */
    public function the_car_can_brake()
    {
        $car = new Car('clio', 'vert', 100);
        $braking = $car->brake(100);
        //dump($braking);
        $this->assertEquals("la voiture a freiner", $braking);
    }





}
