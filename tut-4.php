<?php

// Boolean data types

/**
 * ? Representation of boolean false
 * 1. integers 0, -0 = false
 * 2. floats 0.0, -0.0 = false
 * 3. null strings '' = false
 * 4. strings '0' = false
 * 5. Empty Array [] = false
 * 6. null = false
 * 
 * * Other wise all true
 */

$x = true;
echo is_bool($x) . PHP_EOL; // output- 1
var_dump(is_bool($x)) . PHP_EOL; // output- bool(true)
var_dump($x) . PHP_EOL; // output- bool(true)
echo gettype($x) . PHP_EOL; // output- boolean

$x = false;
echo is_bool($x) . PHP_EOL; // output- 1
var_dump(is_bool($x)) . PHP_EOL; // output- bool(true)
var_dump($x) . PHP_EOL; // output- bool(false)
echo gettype($x) . PHP_EOL; // output- boolean