<!-- Function -->
<?php
//To create a function using a keyword function
//Followed by the name of the function with ().
function add($number)
{ //(parameter)
    //executable code.
    $result = $number + $number;
    // A function allways return a value.
    return $result;
}

//To work a function need to be called.
echo add(2);
?>