<?php

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator as ShapeCalculator;

echo 'Rectangle: (width = 2, height = 3)';
echo PHP_EOL;

// Area
echo ' Area: ';

$circles = array(
    new Shapes\Rectangle(2, 3)
);

$areaCalculator = new ShapeCalculator\AreaCalculator($circles);

$outputter = new ShapeCalculator\Outputter($areaCalculator);

echo $outputter->json();
echo PHP_EOL;

// Perimeter
echo ' Perimeter: ';

$circles = array(
    new Shapes\Rectangle(2, 3)
);

$areaCalculator = new ShapeCalculator\PerimeterCalculator($circles);

$outputter = new ShapeCalculator\Outputter($areaCalculator);

echo $outputter->json();
echo PHP_EOL;