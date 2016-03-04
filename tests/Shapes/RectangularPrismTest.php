<?php

use Acme\Shapes\RectangularPrism as RectangularPrism;
use Acme\ShapeCalculator as ShapeCalculator;

class RectangularPrismTest extends \PHPUnit_Framework_TestCase
{

    protected $delta;

    protected $rectangularPrism;

    protected function setUp()
    {
        $this->delta = 0.0001;

        $this->rectangularPrism = new RectangularPrism(8.10, 6.72, 4.99);
    }

    public function testVolume()
    {
        $area = $this->rectangularPrism->volume();

        $assertValue = 271.6157;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

    public function testSurfaceArea()
    {
        $area = $this->rectangularPrism->surfaceArea();

        $assertValue = 256.7676;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }
}
