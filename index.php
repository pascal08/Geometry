<?php

require __DIR__ . '/vendor/autoload.php';

use Acme\Shapes as Shapes;
use Acme\ShapeCalculator as ShapeCalculator;

/*
 * Circle
 */

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

/*
 * Cube
 */

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

/*
 * Cylinder
 */

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


/*
 *  Rectangular Prism
 */

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


/*
 *  Sphere
 */

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


/*
 *  Square
 */

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