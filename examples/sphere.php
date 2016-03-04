<?php

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator as ShapeCalculator;

echo 'Sphere: (radius = 2)';
echo PHP_EOL;

// Volume
echo ' Volume: ';

$spheres = array(
    new Shapes\Sphere(2)
);

$areaCalculator = new ShapeCalculator\VolumeCalculator($spheres);

$outputter = new ShapeCalculator\Outputter($areaCalculator);

echo $outputter->json();
echo PHP_EOL;

// Surface Area
echo ' Surface Area: ';

$spheres = array(
    new Shapes\Sphere(2)
);

$areaCalculator = new ShapeCalculator\SurfaceAreaCalculator($spheres);

$outputter = new ShapeCalculator\Outputter($areaCalculator);

echo $outputter->json();
echo PHP_EOL;