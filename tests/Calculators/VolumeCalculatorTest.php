<?php

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator\VolumeCalculator;

class VolumeCalculatorTest extends \PHPUnit_Framework_TestCase
{

    protected $delta;

    protected $shapes;

    protected function setUp()
    {
        $this->delta = 0.0001;

        $this->shapes = array(
            new Shapes\Sphere(8.19),
            new Shapes\RectangularPrism(7.33, 7.91, 1.23),
            new Shapes\Pyramid(5.44, 3.23)
        );
    }

    public function testCalculation()
    {
        $calculator = new VolumeCalculator($this->shapes);

        $area = $calculator->calculate();

        $assertValue = 2404.3038;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

}
