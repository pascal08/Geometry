<?php

use Acme\Shapes\Cone as Cone;
use Acme\ShapeCalculator as ShapeCalculator;

class ConeTest extends \PHPUnit_Framework_TestCase
{

    protected $delta;

    protected $cone;

    protected function setUp()
    {
        $this->delta = 0.0001;

        $this->cone = new Cone(3.32, 9.53);
    }

    public function testVolume()
    {
        $area = $this->cone->volume();

        $assertValue = 110.0013;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

    public function testSurfaceArea()
    {
        $area = $this->cone->surfaceArea();

        $assertValue = 139.8857;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }
}
