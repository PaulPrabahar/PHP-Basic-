<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="if_Statement.php" method="get">
        <label>Enter your work hours: </label>
        <input type="text" name="hours">
        <input type="submit">
    </form>
</body>

</html>
<?php

/* 
If statement works based on the condition,
if condition is true it executes secnarioa A else secnario B.
*/

/*
Syntax:
    if(cond){
        execution.
    }
    elseif(cond){
        execution.
    }
    else{
        execution.
    }
*/

$hours = $_GET['hours'];
$rate = 50;
$weekley_pay = null;

$weekley_pay = $hours * $rate;

if ($hours < 0) {
    echo "Valid data enter pannu da venna.";
} elseif ($hours > 100) {
    echo "Thank you for your effort, take regular intervals<br>";
    $weekley_pay += 20;
    echo "Your pay for this week is {$weekley_pay}";
} elseif ($hours >= 40) {
    echo "Thank you for your effort<br>";
    $weekley_pay += 5;
    echo "Your pay for this week is {$weekley_pay}";
} elseif ($hour == 40) {
    echo "Dei extra hour's spend pannu da venna<br>";
    echo "Your pay for this week is {$weekley_pay}";
} else {
    echo "Thambi paper pottu kelambu ma<br>";
    echo "Your pay for this week is {$weekley_pay}";
}

?>