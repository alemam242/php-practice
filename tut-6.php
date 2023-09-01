<?php

/**
 * ? Float Data Type
 */

$x = 45.2; // Normal float value
var_dump($x); // output- float(45.2)

$x = 45.2e3; // Exponential float value
var_dump($x); // output- float(45200)

$x = 45.2e-3; // Neg Exponential float value
var_dump($x); // output- float(0.0452)

$x = 45_000.2; // Underscored float value for better readability
var_dump($x); // output- float(45000.2)

$x = floor((0.1 + 0.4) * 10);
var_dump($x); // output- float(5)

$x = ceil((0.1 + 0.3) * 3);
var_dump($x); // output- float(2)

$x = PHP_FLOAT_MAX * 2; // Overflow the limit of float, So it will be Infinity
var_dump($x); // output- float(INF)

$x  = log(-1); // This is not a number(NAN)
var_dump($x); // output- float(NAN)


// check if a number is Infinity or not

if (is_finite(PHP_FLOAT_MAX * 2)) {
    echo "Finite number" . PHP_EOL;
} else {
    echo "Infinite number" . PHP_EOL; // It will execute
}

if (is_infinite(PHP_FLOAT_MAX * 2)) {
    echo "Infinite number" . PHP_EOL; // It will execute
} else {
    echo "Finite number" . PHP_EOL;
}

// check a value is number or not

if (is_nan(log(-1))) {
    echo "This is not a number" . PHP_EOL; // It will execute
} else {
    echo "This is a number" . PHP_EOL;
}
