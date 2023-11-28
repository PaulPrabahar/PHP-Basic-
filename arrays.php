<?php
/*

array = To store a lot of values in a single variable is called array.

*/

$foods = array(
    "apple", "orange", "bananna", "coconut"
);

// To loop through an array.

foreach ($foods as $food) {
    echo $food . "<br>";
}

echo "<br>";

// To replace a element in a array.
$foods[0] = "pineapple";
foreach ($foods as $food) {
    echo $food . "<br>";
}

echo "<br>";

//To push an element in the last. 
array_push($foods, "green apple", "craneberry");
foreach ($foods as $food) {
    echo $food . "<br>";
}

echo "<br>";

//To pop an element in the last element in the array.
array_pop($foods);
foreach ($foods as $food) {
    echo $food . "<br>";
};

echo "<br>";

//To remove first element of the array.
array_shift($foods);
foreach ($foods as $food) {
    echo $food . "<br>";
};

echo "<br>";

// To reverse an array, we use a function called array_reverse($foods),
//But to work correctly we need to assigin it to the new value.

$reverse_array = array_reverse($foods);
foreach ($reverse_array as $food) {
    echo $food . "<br>";
};

echo "<br>";

//To count the elements in the array we use count() method.

echo count($foods);
