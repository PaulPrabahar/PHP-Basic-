<?php
/*
logical operators are used to combine multiple operators,

&& = AND operators execute when both condition are true.
|| = OR operator ecevute when any one condition is true.
! = NOT operator is used when the condition is false.

*/

$temp = 100;

if ($temp >= 0 || $temp < 150) { // This condition work when any of them is true.
    echo "The perfect temperature";
} elseif ($temp >= 50 && $temp < 55) { // This condition work when both condition is true.
    echo "It is a golden temperature";
} else {
    echo "temperature is not good";
};
