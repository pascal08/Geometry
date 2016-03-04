<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\PlaneInterface;

class Circle implements PlaneInterface
{

    /**
     * @var float|int
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

    /**
     * @return float
     */
    public function perimeter()
    {
        return 2 * $this->radius * pi();
    }
}