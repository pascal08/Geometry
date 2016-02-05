<?php

namespace Acme\ShapeCalculator;

use Acme\ShapeCalculator\Contracts\CalculatorInterface;

class Outputter
{
    /**
     * @var CalculatorInterface
     */
    public $calculator;

    /**
     * @param CalculatorInterface $calculator
     */
    public function __construct(CalculatorInterface $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @return string
     */
    public function json()
    {
        return json_encode(array($this->calculator->calculate()));
    }

    /**
     * @return string
     */
    public function html()
    {
        return '<p>' . $this->calculator->calculate() . '</p>';
    }


}