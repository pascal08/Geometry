<?php

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator\AreaCalculator;

class AreaCalculatorTest extends \PHPUnit_Framework_TestCase
{

    protected $delta;

    protected $shapes;

    protected function setUp()
    {
        $this->delta = 0.0001;

        $this->shapes = array(
            new Shapes\Circle(8.19),
            new Shapes\Rectangle(7.33, 7.91),
            new Shapes\Square(5.44),
        );
    }

    public function testCalculation()
    {
        $calculator = new AreaCalculator($this->shapes);

        $area = $calculator->calculate();

        $assertValue = 298.2997;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }
}
