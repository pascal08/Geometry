<?php

use Acme\Shapes\Circle as Circle;
use Acme\ShapeCalculator as ShapeCalculator;

class CircleTest extends \PHPUnit_Framework_TestCase
{

    protected $delta;

    protected $circle;

    protected function setUp()
    {
        $this->delta = 0.0001;

        $this->circle = new Circle(5.57);
    }

    public function testArea()
    {
        $area = $this->circle->area();

        $assertValue = 97.4676;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

    public function testPerimeter()
    {
        $area = $this->circle->perimeter();

        $assertValue = 34.9973;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }
}
