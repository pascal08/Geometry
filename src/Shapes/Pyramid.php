<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\SolidInterface;

class Pyramid implements SolidInterface
{

    /**
     * @var float|int
     */
    private $length;

    /**
     * @var float|int
     */
    private $height;

    /**
     * Pyramid constructor.
     *
     * @param float|int $length
     * @param float|int $height
     */
    public function __construct($length, $height)
    {
        $this->length = $length;
        $this->height = $height;
    }

    /**
     * @return float|int
     */
    public function volume()
    {
        return (1/3) * pow($this->length, 2) * $this->height;
    }

    /**
     * @return float|int
     */
    public function surfaceArea()
    {
        return pow($this->length, 2) + $this->length * sqrt(pow($this->length, 2) + 4 * pow($this->height, 2));
    }
}