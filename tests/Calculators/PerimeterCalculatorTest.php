<?php

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator\PerimeterCalculator;

class PerimeterCalculatorTest extends \PHPUnit_Framework_TestCase
{

    protected $delta;

    protected $shapes;

    protected function setUp()
    {
        $this->delta = 0.0001;

        $this->shapes = array(
            $this->solidShapeDummy(),
            $this->solidShapeDummy(),
            $this->solidShapeDummy()
        );
    }

    protected function solidShapeDummy()
    {
        $solidShape = $this->getMock('\Acme\Shapes\Contracts\PlaneInterface');
        $solidShape
            ->expects($this->any())
            ->method('perimeter')
            ->will($this->returnValue(3.0001));

        return $solidShape;
    }

    public function testCalculation()
    {
        $calculator = new PerimeterCalculator($this->shapes);

        $area = $calculator->calculate();

        $assertValue = 9.0003;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

}
