<?php

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator as ShapeCalculator;

echo 'Pyramid: (length = 2, height = 3)';
echo PHP_EOL;

// Volume
echo ' Volume: ';

$spheres = array(
    new Shapes\Pyramid(2, 3)
);

$areaCalculator = new ShapeCalculator\VolumeCalculator($spheres);

$outputter = new ShapeCalculator\Outputter($areaCalculator);

echo $outputter->json();
echo PHP_EOL;

// Surface Area
echo ' Surface Area: ';

$spheres = array(
    new Shapes\Pyramid(2, 3)
);

$areaCalculator = new ShapeCalculator\SurfaceAreaCalculator($spheres);

$outputter = new ShapeCalculator\Outputter($areaCalculator);

echo $outputter->json();
echo PHP_EOL;