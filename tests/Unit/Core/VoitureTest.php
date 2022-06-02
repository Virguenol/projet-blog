<?php

namespace Tests\Unit\Core;


use App\Core\Voiture;
use PHPUnit\Framework\TestCase;

/**
 * Undocumented class
 */
class VoitureTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @test
     */
    public function can_create_a_car()
    {
        $car = new Voiture();
        $this->assertInstanceOf(Voiture::class, $car);
    }

    /** @test */
    public function car_to_advance_at_red_light()
    {
       $car = new Voiture();
       $actuel = $car->my_car(1);
       $this->assertEquals('avance', $actuel);
    }

    /** @test */
    public function car_slow_down_at_red_light()
    {
       $car = new Voiture();
       $actuel = $car->my_car(2);
       $this->assertEquals('ralentir', $actuel);
    }

    /** @test */
    public function car_stop_at_red_light()
    {
       $car = new Voiture();
       $actuel = $car->my_car(3);
       $this->assertEquals('arrêt', $actuel);
    }

}
