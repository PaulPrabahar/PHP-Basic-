<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circula calulation</title>
</head>

<body>
    <form action="challange2.php" method="get">
        <label>Radius of a circle: </label>
        <input type="text" name="radius">
        <input type="submit">
    </form>
</body>

</html>
<?php

/*
Recive radius from the user and provied 
circumfrence, area and volume of a circle.
circumfrence = 2 pi r,
Area = pi r square,
volume = 4/3 pi r cube.
*/

$radius = $_GET['radius'];
$circumfrence =  2 * pi() * $radius;
$area = pi() * $radius * $radius;
$volume = 4 / 3 * pi() * $radius * $radius * $radius;

$circumfrence = round($circumfrence, 2);
$area = round($area, 2);
$volume = round($volume, 2);

echo "Circumfrence: {$circumfrence}<br>";
echo "Area: {$area}<br>";
echo "Volume: {$volume}<br>";

?>