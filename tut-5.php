<?php

/**
 * ? Integer Data Types
 */

$x = 115; // Base 10 integer
var_dump($x); // output - int(115)

$x = 0x2A; // HexaDecimal integer, Here 0x is prefix of HexaDecimal
var_dump($x); // output - int(42)

$x = 055; // Octal integer, Here 0 is prefix of Octal
var_dump($x); // output - int(45)

$x = (int)"055"; // Typecast string to integer
var_dump($x); // output - int(55)

$x = 0b11; // Binary integer, Here 0b is prefix of Binary
var_dump($x); // output - int(3)

$x = PHP_INT_MAX; // Maximum limit of integer
var_dump($x); // output - int(9223372036854775807)

# What happened when Overflow limit of integer
$x = PHP_INT_MAX + 1; // It will convert it to float
var_dump($x); // output - float(9.223372036854776E+18)

$x = PHP_INT_MIN; // Minimum limit of integer
var_dump($x); // output - int(-9223372036854775808)

# What happened when underflow limit of integer
$x = PHP_INT_MIN - 1; // It will convert it to float
var_dump($x); // output - float(-9.223372036854776E+18)