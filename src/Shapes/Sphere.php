<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\SolidInterface;

class Sphere implements SolidInterface
{

    /**
     * @var float|int
     */
    public $radius;

    /**
     * @param float|int $radius
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

    /**
     * @return float
     */
    public function surfaceArea()
    {
        return 4 * pi() * pow($this->radius, 2 );
    }
}