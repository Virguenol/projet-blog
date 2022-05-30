<?php

namespace Tests\Unit\Core;

use PHPUnit\Framework\TestCase;

/** @skip */
class StarckTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @test
     */
  /*  public function push_and_drop()
    {
        $tableau = [];

        $this->assertSame(0, count($tableau));

        array_push($tableau, 'foo');
        $this->assertSame('foo', $tableau[count($tableau)-1]);
        $this->assertSame(1, count($tableau));

        $this->assertSame('foo', array_pop($tableau));
        $this->assertSame(0, count($tableau));
    }*/
    /** @skip */
    public function empty_for_dependances()
    {
        $tab = [];

        $this->assertEmpty($tab);

        return $tab;
    }
    /** @skip
     *  @depends empty_for_dependances
    */
    public function push_in_array(array $tab)
    {
        array_push($tab, 'foo');
        $this->assertSame('foo', $tab[count($tab)-1]);
        $this->assertNotEmpty($tab);

        return $tab;

    }

    /**
     * @skip
     *
     * @depends push_in_array
     */
    public function pop_fonction_array(array $tab)
    {
        $this->assertSame('foo', array_pop($tab));
        $this->assertEmpty($tab);
    }

    /**
     * @skip
     */
    public function egaliter_desnombre()
    {
        $this->assertSame(
            [1, 5, 8, 9, 10],
            [1, 5, 88, 9, 10]
        );
    }
}
