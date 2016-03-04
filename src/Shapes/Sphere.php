<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\SolidInterface;

class Sphere implements SolidInterface
{

    /**
     * @var int|float
     */
    public $radius;

    /**
     * @param int|float $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return int|float
     */
    public function volume()
    {
        return (4/3) * pi() * pow($this->radius, 3);
    }

    /**
     * @return int|float
     */
    public function surfaceArea()
    {
        return 4 * pi() * pow($this->radius, 2 );
    }
}