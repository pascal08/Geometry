<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\SolidInterface;

class Cube implements SolidInterface
{

    /**
     * @var int|float
     */
    private $length;

    /**
     * Cube constructor.
     *
     * @param $length
     */
    public function __construct($length)
    {
        $this->length = $length;
    }

    /**
     * @return int|float
     */
    public function volume()
    {
        return pow($this->length, 3);
    }

    /**
     * @return int|float
     */
    public function surfaceArea()
    {
        return 6 * pow($this->length, 2);
    }
}