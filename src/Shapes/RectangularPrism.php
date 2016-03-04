<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\SolidInterface;

class RectangularPrism implements SolidInterface
{

    /**
     * @var float|int
     */
    private $width;

    /**
     * @var float|int
     */
    private $depth;

    /**
     * @var float|int
     */
    private $height;

    /**
     * Cube constructor.
     *
     * @param float|int $width
     * @param float|int $depth
     * @param float|int $height
     */
    public function __construct($width, $depth, $height)
    {

        $this->width = $width;
        $this->depth = $depth;
        $this->height = $height;
    }

    /**
     * @return float|int
     */
    public function surfaceArea()
    {
        $surfaceArea[] = 2 * $this->width * $this->height;
        $surfaceArea[] = 2 * $this->width * $this->depth;
        $surfaceArea[] = 2 * $this->height * $this->depth;

        return array_sum($surfaceArea);
    }

    /**
     * @return float|int
     */
    public function volume()
    {
        return $this->width * $this->height * $this->depth;
    }
}