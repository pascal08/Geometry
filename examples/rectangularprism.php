<?php

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator as ShapeCalculator;

echo 'Rectangular Prism: (width = 1, depth = 2, height = 3)';
echo PHP_EOL;

// Volume
echo ' Volume: ';

$rectangularPrisms = array(
    new Shapes\RectangularPrism(1, 2, 3)
);

$volumeCalculator = new ShapeCalculator\VolumeCalculator($rectangularPrisms);

$outputter = new ShapeCalculator\Outputter($volumeCalculator);

echo $outputter->json();
echo PHP_EOL;

// Surface Area
echo ' Surface Area: ';

$rectangularPrisms = array(
    new Shapes\RectangularPrism(1, 2, 3)
);

$volumeCalculator = new ShapeCalculator\SurfaceAreaCalculator($rectangularPrisms);

$outputter = new ShapeCalculator\Outputter($volumeCalculator);

echo $outputter->json();
echo PHP_EOL;