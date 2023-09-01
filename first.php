<?php
fscanf(STDIN, '%f', $cel);

$far = ($cel * 9 / 5) + 32;

echo "The temperature in Fahrenheit is: " . number_format($far, 2);
