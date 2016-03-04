<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\ThreeDimensionalInterface;

class Pyramid implements ThreeDimensionalInterface
{

    /**
     * @var
     */
    private $length;

    /**
     * @var
     */
    private $height;

    /**
     * Pyramid constructor.
     *
     * @param $length
     * @param $height
     */
    public function __construct($length, $height)
    {
        $this->length = $length;
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function volume()
    {
        return (1/3) * pow($this->length, 2) * $this->height;
    }

    /**
     * @return number
     */
    public function surfaceArea()
    {
        return pow($this->length, 2) + $this->length * sqrt(pow($this->length, 2) + 4 * pow($this->height, 2));
    }
}