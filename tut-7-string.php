<?php

/**
 * ! Run this file in browser for better result
 */

$firstName = "Al";
$lastName = "$firstName Emam";

echo $firstName . PHP_EOL; //output- Al
echo $lastName . PHP_EOL; //output- Al Emam

$text = "all text";
echo $text[0] . PHP_EOL; //output- a
echo $text[-2] . PHP_EOL; //output- x

$lineNum = [1, 2, 3];

// Heredoc string (Here can use variable)
$text = <<<TEXT
Line $lineNum[0]
Line $lineNum[1]
Line $lineNum[2]
TEXT;

echo nl2br($text); // nl2br() this function convert newline to <br/> tag for browser compatibility

// Nowdoc string (Here can not use variable)
$text = <<<'TEXT'
Line $lineNum[0]
Line $lineNum[1]
Line $lineNum[2]
TEXT;

echo nl2br($text);

//
$text = <<<TEXT

<h1>Hello World</h1>

TEXT;

echo nl2br($text);
