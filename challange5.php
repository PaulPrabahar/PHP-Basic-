<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capital Finder</title>
</head>

<body>
    <form action="challange5.php" method="get">
        <label>Enter the name of the city:&nbsp;</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>

</html>

<?php
/*

To get a country name from the user and we ne need to display the capital of
that country using assorted array.

*/

$country = $_GET['country'];

$countries = array(
    "USA" => "Washigton D.C.",
    "Japan" => "Tokyo",
    "United Kingdom" => "London",
    "India" => "New Delhi"
);

if ($country) {
    if (array_key_exists($country, $countries)) { //array_key_exists() checks the given value is in the array.
        echo "the capital is {$countries[$country]}";
    } else {
        echo "Enter a valid {$country}";
    }
}

?>