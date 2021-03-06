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
            $this->solidShapeDummy(),
            $this->solidShapeDummy(),
            $this->solidShapeDummy()
        );
    }

    protected function solidShapeDummy()
    {
        $solidShape = $this->getMock('\Acme\Shapes\Contracts\SolidInterface');
        $solidShape
            ->expects($this->any())
            ->method('volume')
            ->will($this->returnValue(3.0001));

        return $solidShape;
    }

    public function testCalculation()
    {
        $calculator = new VolumeCalculator($this->shapes);

        $area = $calculator->calculate();

        $assertValue = 9.0003;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

}
