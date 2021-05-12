<?php
require __DIR__ . '/vendor/autoload.php';
use src\circle\ComparableCircle;

$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 2);
$circleThree = new ComparableCircle('circleThree', 3);

$test = $circleOne->compareTo($circleTwo);
echo ('Comparable: <br>');
echo $test;


