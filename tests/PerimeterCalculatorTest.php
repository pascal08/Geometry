<?php

namespace Acme\ShapeCalculator;

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator as ShapeCalculator;

class PerimeterCalculatorTest extends \PHPUnit_Framework_TestCase
{

    protected $delta;

    protected function setUp()
    {
        $this->delta = 0.0001;
    }

    public function testCircle()
    {
        $circles = array(
            new Shapes\Circle(5.57)
        );

        $areaCalculator = new ShapeCalculator\PerimeterCalculator($circles);

        $area = $areaCalculator->calculate();

        $assertValue = 34.9973;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

    public function testRectangle()
    {
        $circles = array(
            new Shapes\Rectangle(7.45, 13.18)
        );

        $areaCalculator = new ShapeCalculator\PerimeterCalculator($circles);

        $area = $areaCalculator->calculate();

        $assertValue = 41.26;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

    public function testSquare()
    {
        $circles = array(
            new Shapes\Square(6.77)
        );

        $areaCalculator = new ShapeCalculator\PerimeterCalculator($circles);

        $area = $areaCalculator->calculate();

        $assertValue = 27.08;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }


    public function testMultipleShapes()
    {
        $circles = array(
            new Shapes\Circle(8.19),
            new Shapes\Rectangle(7.33, 7.91),
            new Shapes\Square(5.44),
        );

        $areaCalculator = new ShapeCalculator\PerimeterCalculator($circles);

        $area = $areaCalculator->calculate();

        $assertValue = 103.6993;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

}
