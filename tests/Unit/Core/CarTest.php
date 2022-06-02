<?php

namespace Tests\Unit\Core;


use App\Core\Car;
use PHPUnit\Framework\TestCase;

/**
 * @group core
 */
class CarTest extends TestCase
{
    /**
     * @test
     */
    public function can_create_a_car()
    {
        $car = new Car();
        $this->assertInstanceOf(Voiture::class, $car);
    }

    /** @test */
    public function car_to_advance_at_red_light()
    {
       $car = new Car();
       $actuel = $car->my_car(1);
       $this->assertEquals('avance', $actuel);
    }

    /** @test */
    public function car_slow_down_at_red_light()
    {
       $car = new Car();
       $actuel = $car->my_car(2);
       $this->assertEquals('ralentir', $actuel);
    }

    /** @test */
    public function car_stop_at_red_light()
    {
       $car = new Car();
       $actuel = $car->my_car(3);
       $this->assertEquals('arrêt', $actuel);
    }

}
