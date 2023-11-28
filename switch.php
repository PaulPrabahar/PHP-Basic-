<?php
/*

Switch is used when there is a lot condition to be checked.
it is an effective alternate for elseif.

*/

$grade = "A";

switch ($grade) {
    case "A": //condition that need to be executed.
        echo "You did great";
        break; //once the condition satisfy it will break the loop.
    case "B":
        echo "You did good strive for progress";
        break;
    case "C":
        echo "You did Averagely need to work hard";
        break;
    case "D":
        echo "Poor performance work harder";
        break;
    case "F":
        echo "You failed!call your parents";
        break;
    default:
        echo "You failed!call your parents";
}
