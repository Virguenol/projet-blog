<?php

namespace Tests\Unit\Core;

use App\Core\Voiture;
use PHPUnit\Framework\TestCase;

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

    public function car_stopped_at_red_light()
    {
        $car = new Voiture();
        $car->couler('rouge');
        $this->assertEquals('stop', $car);
    }
}
