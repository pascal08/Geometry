<?php

namespace Acme\ShapeCalculator;

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator as ShapeCalculator;

class AreaCalculatorTest extends \PHPUnit_Framework_TestCase
{

    protected $delta;

    protected function setUp()
    {
        $this->delta = 0.0001;
    }

    public function testCircle()
    {
        $circle = array(
            new Shapes\Circle(5.57)
        );

        $areaCalculator = new ShapeCalculator\AreaCalculator($circle);

        $area = $areaCalculator->calculate();

        $assertValue = 97.4676;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

    public function testRectangle()
    {
        $rectangle = array(
            new Shapes\Rectangle(7.45, 13.18)
        );

        $areaCalculator = new ShapeCalculator\AreaCalculator($rectangle);

        $area = $areaCalculator->calculate();

        $assertValue = 98.191;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

    public function testSquare()
    {
        $square = array(
            new Shapes\Square(14.20)
        );

        $areaCalculator = new ShapeCalculator\AreaCalculator($square);

        $area = $areaCalculator->calculate();

        $assertValue = 201.64;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }


    public function testMultipleShapes()
    {
        $shapes = array(
            new Shapes\Circle(8.19),
            new Shapes\Rectangle(7.33, 7.91),
            new Shapes\Square(5.44),
        );

        $areaCalculator = new ShapeCalculator\AreaCalculator($shapes);

        $area = $areaCalculator->calculate();

        $assertValue = 298.2997;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }
}
