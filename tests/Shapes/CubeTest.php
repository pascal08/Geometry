<?php

use Acme\Shapes\Cube as Cube;
use Acme\ShapeCalculator as ShapeCalculator;

class CubeTest extends \PHPUnit_Framework_TestCase
{

    protected $delta;

    protected $cube;

    protected function setUp()
    {
        $this->delta = 0.0001;

        $this->cube = new Cube(6.23);
    }

    public function testVolume()
    {
        $area = $this->cube->volume();

        $assertValue = 241.8044;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }

    public function testSurfaceArea()
    {
        $area = $this->cube->surfaceArea();

        $assertValue = 232.8774;

        $this->assertEquals($area, $assertValue, '', $this->delta);
    }
}
