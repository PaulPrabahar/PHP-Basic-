<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="math_func.php" method="post">
        <label>number:</label>
        <input type="text" name="number">
        <input type="text" name="number1">
        <input type="submit" value="submit">
    </form>
</body>

</html>

<?php
$number = $_POST['number'];
$number1 = $_POST['number1'];
$answer = null;

/*
    absolute = abs()-> gives positve value only even when the value is in negative.
    floor = floor() -> gives the lowest round value.
    round = round() -> gives the nearest round value.
    ceil = ceil() -> always gives the highest round value.
    power = pow(1, 2) -> gives the power of the 1.
    square root = sqrt() -> to find square of the given value.
    maximun = max() -> to find maximum value of a given values.
    minimum = min() -> to find minimum value of a given values.
    pi = pi() -> to generate pi value of a circle.
    random = rand() to generate random numbers.

    */

// $answer = abs($number);
// $answer = floor($number);
// $answer = round($number);
// $answer = ceil($number);
// $answer = pow($number, $number1);
// $answer = sqrt($number);
// $answer = max($number, $number1);
// $answer = min($number, $number1);
// $answer = pi();
// $answer = rand();


echo "Answer: {$answer}"
?>