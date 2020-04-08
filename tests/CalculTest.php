<?php

namespace App\Tests;

use App\Calcul;
use PHPUnit\Framework\TestCase;

final class CalculTest extends TestCase
{
    public function testAdd()
    {
        $calcul = new Calcul();
        $result = $calcul->add(20, 20);
        $this->assertEquals(40, $result);
    }

    public function testSub()
    {
        $calcul = new Calcul();
        $result = $calcul->sub(100, 2);
        $this->assertEquals(98, $result);
    }

    public function testMul()
    {
        $calcul = new Calcul();
        $result = $calcul->mul(50, 2);
        $this->assertEquals(100, $result);
    }

    public function testDiv()
    {
        $calcul = new Calcul();
        $result = $calcul->div(40, 4);
        $this->assertEquals(10, $result);
    }


}
