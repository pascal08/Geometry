<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\TwoDimensionalInterface;

class Circle implements TwoDimensionalInterface
{

    /**
     * @var float
     */
    public $radius;

    /**
     * @param float $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function area()
    {
        return pow($this->radius, 2) * pi();
    }
}