<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day task manager</title>
</head>

<body>
    <form action="challange4.php" method="get">
        <label>
            Enter the current day:&nbsp;
        </label>
        <input type="text" name="day">
        <input type="submit">
    </form>
</body>

</html>
<?php
/*

get the current day from the user using the switch statement,
display a personal task message to perform during that day.

*/

$day = $_GET['day'];

$current_day = date("l");

if ($day != $current_day) {
    echo "Not the current day";
} else {
    switch ($current_day) {
        case "Monday":
            echo "Since {$current_day} try to complete the initial research for work today itself ";
            break;
        case "Tuesday":
            echo "Since {$current_day} try to compete the prototype for the model to work  ";
            break;
        case "Wednesday":
            echo "Since {$current_day} use the prototype to make a working model ";
            break;
        case "Thursday":
            echo "Since {$current_day} do unit test and logical test in the model for efficiency ";
            break;
        case "Friday":
            echo "Since {$current_day} Send for code review and deploy to the production.";
            break;
        case "Saturday":
            echo " {$current_day}!!  party time.";
            break;
        case "Sunday":
            echo " Happy {$current_day} make sure you go to church.";
            break;
        default:
            echo "{$current_day}:- This is not a valid day";
            break;
    }
};



?>