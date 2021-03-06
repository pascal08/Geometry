<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\PlaneInterface;

class Rectangle implements PlaneInterface
{

    /**
     * @var float|int
     */
    private $width;

    /**
     * @var float|int
     */
    private $height;

    /**
     * Rectangle constructor.
     *
     * @param float|int $width
     * @param float|int $height
     */
    public function __construct($width, $height)
    {

        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return float|int
     */
    public function area()
    {
        return $this->width * $this->height;
    }

    /**
     * @return float|int
     */
    public function perimeter()
    {
        return 2 * $this->width + 2 * $this->height;
    }
}