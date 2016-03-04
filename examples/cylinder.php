<?php

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator as ShapeCalculator;

echo 'Cylinder: (radius = 2, length = 3)';
echo PHP_EOL;

// Volume
echo ' Volume: ';

$cylinders = array(
    new Shapes\Cylinder(2, 3)
);

$volumeCalculator = new ShapeCalculator\VolumeCalculator($cylinders);

$outputter = new ShapeCalculator\Outputter($volumeCalculator);

echo $outputter->json();
echo PHP_EOL;

// Surface Area
echo ' Surface Area: ';

$cylinders = array(
    new Shapes\Cylinder(2, 3)
);

$volumeCalculator = new ShapeCalculator\SurfaceAreaCalculator($cylinders);

$outputter = new ShapeCalculator\Outputter($volumeCalculator);

echo $outputter->json();
echo PHP_EOL;