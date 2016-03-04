<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\TwoDimensionalInterface;

class Square implements TwoDimensionalInterface
{

    /**
     * @var float|int
     */
    public $length;

    /**
     * Square constructor.
     *
     * @param $length
     */
    public function __construct($length)
    {
        $this->length = $length;
    }

    /**
     * @return float|int
     */
    public function area()
    {
        return pow($this->length, 2);
    }

    /**
     * @return float|int
     */
    public function circumference()
    {
        return 4 * $this->length;
    }
}