<?php

namespace Tests\Unit\Core;

use App\Core\TraficLight;
use PHPUnit\Framework\TestCase;


/**
 * @group core
 */
class TraficLightTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @test
     */
    public function can_create_a_traffic_light()
    {
        $feuOne = new TraficLight();
        $this->assertInstanceOf(TraficLight::class, $feuOne);

    }

    /**
     * @test
    */
    public function state_of_the_color_of_rouge()
    {
      $feuOne = new TraficLight();
      $result = $feuOne->coler(1);
      $this->assertEquals('vert', $result);

    }

     /**
     * @test
    */
    public function state_of_the_color_of_vert()
    {
      $feuOne = new TraficLight();
      $result = $feuOne->coler(2);
      $this->assertEquals('orange', $result);
    }

     /**
     * @test
    */
    public function state_of_the_color_of_orange()
    {
      $feuOne = new TraficLight();
      $result = $feuOne->coler(3);
      $this->assertEquals('rouge', $result);
    }
}
