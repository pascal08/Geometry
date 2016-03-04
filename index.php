<?php

require __DIR__ . '/vendor/autoload.php';

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator as ShapeCalculator;

/*
 * Area Calculation
 */
$shapes = array(
    new Shapes\Square(1),
    new Shapes\Circle(1)
);

$areaCalculator = new ShapeCalculator\AreaCalculator($shapes);

$outputter = new ShapeCalculator\Outputter($areaCalculator);

echo $outputter->json();

/*
 * Volume Calculation
 */
$shapes = array(
    new Shapes\Cube(1, 2, 3)
);

$volumeCalculator = new ShapeCalculator\VolumeCalculator($shapes);

$outputter = new ShapeCalculator\Outputter($volumeCalculator);

echo $outputter->json();

/*
 * Surface Calculation
 */
$shapes = array(
    new Shapes\Cube(1, 1, 1)
);

$volumeCalculator = new ShapeCalculator\SurfaceAreaCalculator($shapes);

$outputter = new ShapeCalculator\Outputter($volumeCalculator);

echo $outputter->json();