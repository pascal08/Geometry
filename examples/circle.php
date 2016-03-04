<?php

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator as ShapeCalculator;

echo 'Circle: (radius = 2)';
echo PHP_EOL;

// Area
echo ' Area: ';

$circles = array(
    new Shapes\Circle(2)
);

$areaCalculator = new ShapeCalculator\AreaCalculator($circles);

$outputter = new ShapeCalculator\Outputter($areaCalculator);

echo $outputter->json();
echo PHP_EOL;