<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\SolidInterface;

class Cube implements SolidInterface
{

    /**
     * @var float|int
     */
    private $length;

    /**
     * Cube constructor.
     *
     * @param float|int $length
     */
    public function __construct($length)
    {
        $this->length = $length;
    }

    /**
     * @return float|int
     */
    public function volume()
    {
        return pow($this->length, 3);
    }

    /**
     * @return float|int
     */
    public function surfaceArea()
    {
        return 6 * pow($this->length, 2);
    }
}