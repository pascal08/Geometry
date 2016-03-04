<?php

use Acme\Shapes\Square as Square;
use Acme\ShapeCalculator as ShapeCalculator;

class SquareTest extends \PHPUnit_Framework_TestCase
{
    protected $delta;

    protected $square;

    protected function setUp()
    {
        $this->delta = 0.0001;

        $this->square = new Square(14.20);
    }

    public function testArea()
    {
        $area = $this->square->area();

        $assertValue = 201.64;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

    public function testPerimeter()
    {
        $area = $this->square->perimeter();

        $assertValue = 56.80;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }
}
