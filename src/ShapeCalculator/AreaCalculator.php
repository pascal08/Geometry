<?php

namespace Acme\ShapeCalculator;

use Acme\ShapeCalculator\Contracts\CalculatorInterface;
use Acme\Shapes\Contracts\TwoDimensionalInterface;

class AreaCalculator implements CalculatorInterface
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
                throw new \Exception('Shape is not implementing TwoDimensionalInterface');
            }

            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}