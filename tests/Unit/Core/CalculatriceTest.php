<?php

namespace Tests\Unit\Core;

use App\Core\Calculator;
use phpDocumentor\Reflection\PseudoTypes\True_;
use PHPUnit\Framework\TestCase;


/** @group core */
class CalculatriceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @test
     */
    public function can_create_calculator()
    {
        $calculator = new Calculator();
        $this->assertInstanceOf(Calculator::class, $calculator);
    }

    /** @test */
    public function can_do_addision()
    {
      $calcul = new Calculator();
      $result = $calcul->addition(2, 3);
      $this->assertEquals(5, $result);

    }

    /** @test */
    public function can_do_multiplication()
    {
      $calcul = new Calculator();
      $result = $calcul->multiplication(2, 3);
      $this->assertEquals(6, $result);

    }

    /** @test */
    public function can_do_soustraction()
    {
      $calcul = new Calculator();
      $result = $calcul->substraction(2, 3);
      $this->assertEquals(-1, $result);

    }

    /** @test */
    public function can_do_division()
    {
      $calcul = new Calculator();
      $result = $calcul->division(8, 2);
      $this->assertEquals(4, $result);
    }

    /** @test */
    // public function can_do_division_zeno()
    // {
    //   $calcul = new Calculator();
    //   $result = $calcul->division(8, 0);
    //   $this->expectException(InvalidArgumentException::class);

    // }


}
