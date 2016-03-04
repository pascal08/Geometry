<?php

namespace Acme\ShapeCalculator;

use Acme\ShapeCalculator\Contracts\CalculatorInterface;
use Acme\Shapes\Contracts\TwoDimensionalInterface;

class CircumferenceCalculator implements CalculatorInterface
{
    /**
     * @var array
     */
    public $shapes;

    /**
     * @param array $shapes
     */
    public function __construct(array $shapes)
    {
        $this->shapes = $shapes;
    }

    /**
     * @return number
     * @throws \Exception
     */
    public function calculate()
    {
        $area = [];

        foreach ($this->shapes as $shape) {
            if (!$shape instanceof TwoDimensionalInterface) {
                throw new \Exception('Shape is not two dimensional.');
            }

            $area[] = $shape->circumference();
        }

        return array_sum($area);
    }
}