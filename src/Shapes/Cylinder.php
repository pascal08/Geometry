<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\SolidInterface;

class Cylinder implements SolidInterface
{

    /**
     * @var float|int
     */
    private $height;

    /**
     * @var float|int
     */
    private $radius;

    /**
     * Cylinder constructor.
     *
     * @param float|int $radius
     * @param float|int $height
     */
    public function __construct($radius, $height)
    {
        $this->height = $height;
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function volume()
    {
        return pi() * pow($this->radius, 2) * $this->height;
    }

    /**
     * @return float
     */
    public function surfaceArea()
    {
        return 2 * pi() * $this->radius * $this->height + 2 * pi() * pow($this->radius, 2);
    }
}