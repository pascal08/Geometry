<?php

require __DIR__ . '/vendor/autoload.php';

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator as ShapeCalculator;

$shapes = array(
    new Shapes\Square(1),
    new Shapes\Circle(1)
);

$areaCalculator = new ShapeCalculator\AreaCalculator($shapes);

$outputter = new ShapeCalculator\Outputter($areaCalculator);

echo $outputter->json();