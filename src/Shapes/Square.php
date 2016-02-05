<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\TwoDimensionalInterface;

class Square implements TwoDimensionalInterface
{

    /**
     * @var float
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
     * @return float
     */
    public function area()
    {
        return pow($this->length, 2);
    }
}