<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\TwoDimensionalInterface;

class Rectangle implements TwoDimensionalInterface
{


    /**
     * @var int|float
     */
    private $width;

    /**
     * @var int|float
     */
    private $height;

    /**
     * Rectangle constructor.
     *
     * @param int|float $width
     * @param int|float $height
     */
    public function __construct($width, $height)
    {

        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return int|float
     */
    public function area()
    {
        return $this->width * $this->height;
    }
}