<?php

namespace Tests\Unit\Core;

use App\Core\Car;
use App\Core\TraficLight;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @test
     */
    public function the_car_is_running()
    {
        $fire = new TraficLight();
        $car = new Car();
        $result1 = $fire->coler(2);
        $result2 = $car->my_car(1);
        $this->assertEquals('vert', $result1);
        $this->assertEquals('avance', $result2);
    }
}
