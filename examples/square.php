<?php

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator as ShapeCalculator;

echo 'Square: (length = 2)';
echo PHP_EOL;

// Area
echo ' Area: ';

$squares = array(
    new Shapes\Square(2)
);

$areaCalculator = new ShapeCalculator\AreaCalculator($squares);

$outputter = new ShapeCalculator\Outputter($areaCalculator);

echo $outputter->json();
echo PHP_EOL;

// Circumference
echo ' Circumference: ';

$squares = array(
    new Shapes\Square(2)
);

$areaCalculator = new ShapeCalculator\CircumferenceCalculator($squares);

$outputter = new ShapeCalculator\Outputter($areaCalculator);

echo $outputter->json();
echo PHP_EOL;