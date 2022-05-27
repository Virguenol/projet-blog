<?php

namespace Tests\Unit\Core;

use App\Core\Calculator;
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
      $result = $calcul->add(2, 3);
      $this->assertEquals(5, $result);

    }
}
