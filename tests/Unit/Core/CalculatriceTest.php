<?php

namespace Tests\Unit\Core;

use PHPUnit\Framework\TestCase;
use SebastianBergmann\Complexity\Calculator;

/** @group calculator */
class CalculatriceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @test
     */
    public function can_create_temperature()
    {
        $calculator = new Calculator();
        $this->assertInstanceOf(Calculator::class, $calculator);
    }

    /** @test */
    public function can_do_addision()
    {

    }
}
