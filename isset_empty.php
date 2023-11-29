<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset and empty</title>
</head>

<body>
    <form action="isset_empty.php" method="post">
        <label>username:&nbsp;</label>
        <input type="text" name="username"><br>
        <label>password:&nbsp;</label>
        <input type="text" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>
<?php

/*

    isset() and empty() functions are used to find wethere
    the data are interacted with the html.

    isset() = Returns true if a variable is declared and not null.
    empty() = Return true if a variable is not declared, false, null or ""

*/

$username = $_POST['username'];
$password = $_POST['password'];
$login = $_POST['login'];



if (isset($login)) {
    if (empty($username)) {
        echo " user name is missing ";
    } elseif (empty($password)) {
        echo " user password is missing ";
    } else {
        echo " User Name = {$username} ";
        echo " password = {$password} ";
    }
}
?>