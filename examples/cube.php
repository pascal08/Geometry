<?php

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator as ShapeCalculator;

echo 'Cube: (length = 3)';
echo PHP_EOL;

// Volume
echo ' Volume: ';

$cubes = array(
    new Shapes\Cube(3)
);

$volumeCalculator = new ShapeCalculator\VolumeCalculator($cubes);

$outputter = new ShapeCalculator\Outputter($volumeCalculator);

echo $outputter->json();
echo PHP_EOL;

// Surface Area
echo ' Surface Area: ';

$cubes = array(
    new Shapes\Cube(3)
);

$volumeCalculator = new ShapeCalculator\SurfaceAreaCalculator($cubes);

$outputter = new ShapeCalculator\Outputter($volumeCalculator);

echo $outputter->json();
echo PHP_EOL;
