<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\ThreeDimensionalInterface;

class Sphere implements ThreeDimensionalInterface
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
    public function volume()
    {
        return (4/3) * pi() * pow($this->radius, 3);
    }
}