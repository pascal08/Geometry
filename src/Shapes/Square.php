<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\PlaneInterface;

class Square implements PlaneInterface
{

    /**
     * @var float|int
     */
    public $length;

    /**
     * Square constructor.
     *
     * @param int|float $length
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
    public function perimeter()
    {
        return 4 * $this->length;
    }
}