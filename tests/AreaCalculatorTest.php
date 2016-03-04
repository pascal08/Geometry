<?php

namespace Acme\ShapeCalculator;

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator as ShapeCalculator;

class AreaCalculatorTest extends \PHPUnit_Framework_TestCase
{

    public function testCircle()
    {
        $circles = array(
            new Shapes\Circle(2)
        );

        $areaCalculator = new ShapeCalculator\AreaCalculator($circles);

        $area = $areaCalculator->calculate();

        $assertValue = 12.5664;

        $this->assertEquals($area, $assertValue, '', 0.0001);
    }

}
