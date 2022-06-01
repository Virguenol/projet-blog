<?php

namespace Tests\Unit\Core;

use App\Core\Calculator;
use DivisionByZeroError;
use PHPUnit\Framework\TestCase;
use phpDocumentor\Reflection\PseudoTypes\True_;


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
    public function can_do_division_zeno()
    {
       $this->expectError();
       $this->expectException(\DivisionByZeroError::class);
       $this->expectErrorMessage("La division par zéro n'est pas autorisée!");
       $calcul = new Calculator();
       $result = $calcul->division(8, 0);
    }


}
