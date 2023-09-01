<?php

/**
 * * constant variable and variable variables
 */

const PAID_STATUS = "paid"; // defined at a compile time
echo PAID_STATUS . PHP_EOL;


define("SESSION_IN", true); // defined at a runtime
echo SESSION_IN . PHP_EOL;

if (SESSION_IN) {
    define("SCORE", 100); // It will work fine it this control statement
    echo SCORE . PHP_EOL;

    #const MY_SCORE = 100; // But It will throw an exception
}


/**
 * * There are some Magic Constants provided by PHP
 */

// Some of them are
echo PHP_VERSION . PHP_EOL; // print the running php version
echo __FILE__ . PHP_EOL; // print the file path
echo __LINE__ . PHP_EOL; // print the line number
echo __DIR__ . PHP_EOL; // print the directory


// Variable variables
$name = "Buzz";

$$name = "Barry"; // same as $Buzz = "Barry";

echo $name . " " . $Buzz . PHP_EOL; // This is not right way to print

echo $name . " " . $$name . PHP_EOL; // Use this instead

echo "$name $$name" . PHP_EOL; // Output- Buzz $Buzz

echo "$name {$$name}" . PHP_EOL; // Output Buzz Barry
