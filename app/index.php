<?php
declare(strict_types=1);

class Calculator
{
    public function add(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber + $secondNumber;
    }
}
$cal = new Calculator;
echo $cal->add(10.2, 12);
?>