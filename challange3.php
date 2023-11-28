<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter's eligibility</title>
</head>

<body>
    <form action="challange3.php" method="get">
        <label>Enter your age:&nbsp;</label>
        <input type="text" name="age">
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php
/*
Ask the user age and find wether they are eligible to vote or not
the sure must be above 18 to be eligible for vote. Display the information
statement in the display
*/

$age = $_GET['age'];

if ($age == 0 || $age < 0) {
    echo "Enter a valid age";
} elseif ($age == 18 || $age < 18) {
    echo "You are not eligble for voting";
} else {
    echo "Yes! you are eligible for voting";
};

?>