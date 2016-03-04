<?php

use Acme\Shapes\Sphere as Sphere;
use Acme\ShapeCalculator as ShapeCalculator;

class SphereTest extends \PHPUnit_Framework_TestCase
{

    protected $delta;

    protected $sphere;

    protected function setUp()
    {
        $this->delta = 0.0001;

        $this->sphere = new Sphere(4.57);
    }

    public function testVolume()
    {
        $area = $this->sphere->volume();

        $assertValue = 399.7949;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

    public function testSurfaceArea()
    {
        $area = $this->sphere->surfaceArea();

        $assertValue = 262.4474;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }
}
