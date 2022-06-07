<?php

namespace Tests\Unit\Core;

use App\Core\TraficLight;
use PHPUnit\Framework\TestCase;


/**
 * @group trafic
 */
class TraficLightTest extends TestCase
{
    /**
     * @test
     */
    public function we_can_create_a_traffic_light()
    {
        $fire = new TraficLight('red');
        $this->assertInstanceOf(TraficLight::class, $fire);
    }

    /**
     * Car brand Accessors and Mutators
     *
     * @test
     * */
    public function get_color_fire()
    {
        $car = new TraficLight('red');
        $car->getColor('red');
        $this->assertEquals('red', $car->getColor());
    }

    /** @test */
    public function set_color()
    {
        $car = new TraficLight('vert');
        $color = 'vert';
        $car->setColor($color);
        $this->assertEquals($color, $car->getColor());
    }

    /**
     * @test
     */
    public function call_the_red_light()
    {
        $fire = new TraficLight('red');
        $actuel = $fire->redLight();
        $this->assertEquals('Stop le feu est rouge', $actuel);
    }

    /**
     * @test
     */
    public function call_the_orange_light()
    {
        $fire = new TraficLight('orange');
        $actuel = $fire->orangeLight();
        $this->assertEquals('Attention alentir le feu passe bientôt au rouge', $actuel);
    }

    /**
     * @test
     */
    public function call_the_green_light()
    {
        $fire = new TraficLight('green');
        $actuel = $fire->greenLight();
        $this->assertEquals('le le feu est vert rouler', $actuel);
    }



}
