<?php

// Composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Load all examples
foreach (glob('examples/*.php') as $filename)
{
    include $filename;
}