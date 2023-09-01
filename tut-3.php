<?php

/**
 * * There are 10 different types of dataTYpe
 * 
 * ? 4 Scalar Types
 *  1. bool - true(1)/false()
 *  2. int - 1,2,-5,500, ...
 *  3. float/double - 1.2, 8.9, -9.5, 98.00065, ...
 *  4. string - "Al Emam", "Hello World", "Thanks" ...
 * 
 * ? 4 Compound Types
 * 1. Array
 * 2. Object
 * 3. callable
 * 4. iterable
 * 
 * ? 2 Special Types
 * 1. resource
 * 2. null
 */

$num = 100;
$price = 25.66;
$status = "paid";
$valid = true;

// Check data types
echo gettype($num) . PHP_EOL; // output - integer
echo gettype($price) . PHP_EOL; // output - double
echo gettype($status) . PHP_EOL; // output - string
echo gettype($valid) . PHP_EOL; // output - boolean


// Another way to Check data types
var_dump($num) . PHP_EOL; // output - int(100)
var_dump($price) . PHP_EOL; // output - float(25.66)
var_dump($status) . PHP_EOL; // output - string(4) "paid", here 4 means length of the string
var_dump($valid) . PHP_EOL; // output - bool(true)
