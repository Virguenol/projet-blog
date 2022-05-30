<?php

namespace Tests\Unit\Core;

use App\Core\Temperature;
use PHPUnit\Framework\TestCase;

/**
 * @group core
 */
class TemperatureTest extends TestCase
{
    /**
     * @test
     */
    public function can_create_temperature()
    {
        $temperature = new Temperature();

        $this->assertInstanceOf(Temperature::class, $temperature);
    }

    /**
     * @test
     */
    public function can_validate_formats()
    {
        $temperature = new Temperature();

        $this->assertTrue($temperature->validate('°'));
        $this->assertTrue($temperature->validate('F'));
        $this->assertFalse($temperature->validate('k'));
    }

    /** @test */
    public function can_convert_degre_to_faranheit()
    {
        $t = new Temperature;
        $actual = $t->convert(20, 'F');
        $expected = 68;
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function can_convert_faranheit_to_degre()
    {
        $t = new Temperature;
        $actual = $t->convert(68, '°');
        $expected = 20;
        $this->assertEquals($expected, $actual);
    }

}
