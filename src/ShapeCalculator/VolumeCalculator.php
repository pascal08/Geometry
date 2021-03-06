<?php

namespace Acme\ShapeCalculator;

use Acme\ShapeCalculator\Contracts\CalculatorInterface;
use Acme\Shapes\Contracts\SolidInterface;

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
     * @return float|int
     * @throws \Exception
     */
    public function calculate()
    {
        $volume = [];

        foreach ($this->shapes as $shape) {
            if (!$shape instanceof SolidInterface) {
                throw new \Exception('Shape is not three dimensional.');
            }

            $volume[] = $shape->volume();
        }

        return array_sum($volume);
    }


}