<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\ThreeDimensionalInterface;

class RectangularPrism implements ThreeDimensionalInterface
{

    /**
     * @var int|float
     */
    private $width;

    /**
     * @var int|float
     */
    private $depth;

    /**
     * @var int|float
     */
    private $height;

    /**
     * Cube constructor.
     *
     * @param int|float $width
     * @param int|float $depth
     * @param int|float $height
     */
    public function __construct($width, $depth, $height)
    {

        $this->width = $width;
        $this->depth = $depth;
        $this->height = $height;
    }

    /**
     * @return int|float
     */
    public function surfaceArea()
    {
        $surfaceArea[] = 2 * $this->width * $this->height;
        $surfaceArea[] = 2 * $this->width * $this->depth;
        $surfaceArea[] = 2 * $this->height * $this->depth;

        return array_sum($surfaceArea);
    }

    /**
     * @return int|float
     */
    public function volume()
    {
        return $this->width * $this->height * $this->depth;
    }
}