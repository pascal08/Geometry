<?php

use Acme\Shapes\Pyramid as Pyramid;
use Acme\ShapeCalculator as ShapeCalculator;

class PyramidTest extends \PHPUnit_Framework_TestCase
{

    protected $delta;

    protected $pyramid;

    protected function setUp()
    {
        $this->delta = 0.0001;

        $this->pyramid = new Pyramid(1.51, 8.22);
    }

    public function testVolume()
    {
        $area = $this->pyramid->volume();

        $assertValue = 6.2474;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

    public function testSurfaceArea()
    {
        $area = $this->pyramid->surfaceArea();

        $assertValue = 27.2090;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }
}
