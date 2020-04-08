<?php

namespace App\Tests;

use App\Calcul;
use PHPUnit\Framework\TestCase;

final class CalculTest extends TestCase
{
    public function testAdd($a, $b)
    {
        $calculator = new Calcul();
        $result = $calculator->add(20, 20);
        $this->assertEquals(40, $result);
    }

    public function testSub($a, $b)
    {
        $calculator = new Calcul();
        $result = $calculator->sub(100, 2);
        $this->assertEquals(98, $result);
    }

    public function testMul($a, $b)
    {
        $calculator = new Calcul();
        $result = $calculator->mul(50, 2);
        $this->assertEquals(100, $result);
    }

    public function testDiv($a, $b)
    {
        $calculator = new Calcul();
        $result = $calculator->div(40, 4);
        $this->assertEquals(10, $result);
    }


}
