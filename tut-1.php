<?php

/**
 * ! Run this in terminal for better performance
 * ? How to run php file in terminal?
 * * Open terminal and goto the directory where you have saved the file. Then run the command given below
 * ? php fileName.php
 */


/**
 * echo and print are both print the output
 * But echo is faster than print
 * And print return an integer value 0 or 1
 */
echo "Hello World\n";
print("Hello World\n");

echo print("Hello World\n"); // print 1. Because print return value 1

$num = 10;
$nm = &$num; // Store reference of $num
echo PHP_EOL . $num . PHP_EOL;
echo $nm . PHP_EOL;
$num = 99; # As i change the value of $num so the value of $nm will be changed
echo $nm . PHP_EOL;

$name = "Al Emam";

echo 'Name: $name'; // It will not print value of $name because I use single colon here
echo "Name: $name"; // Now It will print the value of $name
echo "Name: {$name}";
echo "Name: " . $name; // Concatenation 
echo "Name: ", $name, " !"; // Print multiple values