<?php

/*

An array that is made with key value pairs, are called associative array.

*/

$capitals = array(
    "USA" => "Washington D.C.",
    "japan" => "Tokyo",
    "South Korea" => "seoul",
    "India" => "New Delhi"
);

foreach ($capitals as $key => $value) {
    echo "{$key} = {$value} <br>";
};

echo "<br>";

// To get all the key in the array we can use array_keys() method.

$keys = array_keys($capitals);

foreach ($keys as $key) {
    echo "{$key}  <br>";
};

echo "<br>";

//To get all the values in the list we can use array_values() method.

$values = array_values($capitals);

foreach ($values as $value) {
    echo "{$value}  <br>";
};

echo "<br>";

// To shift the key and values of the assorted array we can use array_flip() method.

$flips = array_flip($capitals);

foreach ($flips as $key => $value) {
    echo "{$key} => {$value}  <br>";
};

echo "<br>";

//To reverse the position of the array we use array_reverse()

$reverses = array_reverse($capitals);

foreach ($reverses as $key => $value) {
    echo "{$key} => {$value} <br>";
}

echo "<br>";
