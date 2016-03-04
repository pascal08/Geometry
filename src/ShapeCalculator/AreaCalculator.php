<?php

namespace Acme\ShapeCalculator;

use Acme\ShapeCalculator\Contracts\CalculatorInterface;
use Acme\Shapes\Contracts\PlaneInterface;

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
     * @return float|int
     * @throws \Exception
     */
    public function calculate()
    {
        $area = [];

        foreach ($this->shapes as $shape) {
            if (!$shape instanceof PlaneInterface) {
                throw new \Exception('Shape is not two dimensional.');
            }

            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}