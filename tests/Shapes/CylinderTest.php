<?php

use Acme\Shapes\Cylinder as Cylinder;
use Acme\ShapeCalculator as ShapeCalculator;

class CylinderTest extends \PHPUnit_Framework_TestCase
{

    protected $delta;

    protected $cylinder;

    protected function setUp()
    {
        $this->delta = 0.0001;

        $this->cylinder = new Cylinder(6.01, 5.99);
    }

    public function testVolume()
    {
        $area = $this->cylinder->volume();

        $assertValue = 679.7131;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

    public function testSurfaceArea()
    {
        $area = $this->cylinder->surfaceArea();

        $assertValue = 453.1433;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }
}
