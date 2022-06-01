<?php

namespace Tests\Unit\Core;

use PHPUnit\Framework\TestCase;
use App\Core\FeuTricolor;
use Faker\Core\Color;

/**
 * @group core
 */
class FeuTricolorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @test
     */
    public function can_create_a_traffic_light()
    {
        $feuOne = new FeuTricolor();
        $this->assertInstanceOf(FeuTricolor::class, $feuOne);

    }

    /**
     * @test
    */
    public function state_of_the_color_of_rouge()
    {
      $feuOne = new FeuTricolor();
      $result = $feuOne->couler('rouge');
      $this->assertEquals('stop', $result);
    }

     /**
     * @test
    */
    public function state_of_the_color_of_vert()
    {
      $feuOne = new FeuTricolor();
      $result = $feuOne->couler('vert');
      $this->assertEquals('passer', $result);
    }

     /**
     * @test
    */
    public function state_of_the_color_of_orange()
    {
      $feuOne = new FeuTricolor();
      $result = $feuOne->couler('rouge');
      $this->assertEquals('stop', $result);
    }
}
