<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public  function testAdd($firstNumber, $secondNumber, $expected): void
    {
        $calculator = new Calculator();
        $actual = $calculator->add($firstNumber, $secondNumber);
        $this->assertEquals($expected, $actual);
    }

    public function additionProvider()
    {
        return [
            [0, 0, 0],
            [0, 5, 5],
            [7, -2, 5],
            [10.8, 10.1, 20.9]
        ];
    }
}
