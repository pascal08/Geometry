<?php

use Acme\Shapes\Rectangle as Rectangle;
use Acme\ShapeCalculator as ShapeCalculator;

class RectangleTest extends \PHPUnit_Framework_TestCase
{

    protected $delta;

    protected $rectangle;

    protected function setUp()
    {
        $this->delta = 0.0001;

        $this->rectangle = new Rectangle(7.45, 13.18);
    }

    public function testArea()
    {
        $area = $this->rectangle->area();

        $assertValue = 98.191;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

    public function testPerimeter()
    {
        $area = $this->rectangle->perimeter();

        $assertValue = 41.26;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }


}
