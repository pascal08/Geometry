<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\SolidInterface;

class Cylinder implements SolidInterface
{

    /**
     * @var int|float
     */
    private $length;

    /**
     * @var int|float
     */
    private $radius;

    /**
     * Cylinder constructor.
     *
     * @param $radius
     * @param $length
     */
    public function __construct($radius, $length)
    {
        $this->length = $length;
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function volume()
    {
        return pi() * pow($this->radius, 2) * $this->length;
    }

    /**
     * @return float
     */
    public function surfaceArea()
    {
        return 2 * pi() * 2 * $this->radius + pi() * pow($this->radius, 2) * $this->length;
    }
}