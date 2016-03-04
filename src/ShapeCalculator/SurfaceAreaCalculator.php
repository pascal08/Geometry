<?php

namespace Acme\ShapeCalculator;

use Acme\ShapeCalculator\Contracts\CalculatorInterface;
use Acme\Shapes\Contracts\SolidInterface;

class SurfaceAreaCalculator implements CalculatorInterface
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
        $volume = [];

        foreach ($this->shapes as $shape) {
            if (!$shape instanceof SolidInterface) {
                throw new \Exception('Shape is not three dimensional.');
            }

            $volume[] = $shape->surfaceArea();
        }

        return array_sum($volume);
    }


}