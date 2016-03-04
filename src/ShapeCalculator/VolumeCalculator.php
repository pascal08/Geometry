<?php

namespace Acme\ShapeCalculator;

use Acme\ShapeCalculator\Contracts\CalculatorInterface;
use Acme\Shapes\Contracts\ThreeDimensionalInterface;

class VolumeCalculator implements CalculatorInterface
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
            if (!$shape instanceof ThreeDimensionalInterface) {
                throw new \Exception('Shape is not implementing ThreeDimensionalInterface');
            }

            $volume[] = $shape->volume();
        }

        return array_sum($volume);
    }


}