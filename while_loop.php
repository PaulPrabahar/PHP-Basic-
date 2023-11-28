<?php
/*

While loop = To perform a condition indefinetly we can use while loop.
             This loop runs aslongas the condition is true.

*/

/*
Syntax:
      while(cond){
        executable code;
      }

eg:Counter for displayin the 1 - 10
*/
$counter = 0;
while ($counter < 10) {
    echo ($counter + 1) . "<br>";
    $counter++;
}
