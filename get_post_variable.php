<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global variable</title>
</head>

<body>
    <label>GET</label>
    <form action="get_post_variable.php" method="get">
        <label>Username: </label>
        <input type="text" name="username"><br>
        <label>Password: </label>
        <input type="password" name="password"><br>
        <input type="submit" value="Submit">
    </form><br>

    <label>POST</label>
    <form action="get_post_variable.php" method="post">
        <label>Username1: </label>
        <input type="text" name="username1"><br>
        <label>Password1: </label>
        <input type="password" name="password1"><br>
        <input type="submit" value="Submit1">
    </form>
</body>

</html>

<?php

/*
$_GET, $_POST = Super global array used to collect form data an HTML form
                when submitted using HTTP GET and POST method.               
*/

echo $_GET["username"] . "<br>"; //Since it is a arry we must mention the needed value to fetch the value.
echo $_GET["password"] . "<br>";

/*
the disadvantage of get is that when we get data wit get method the data are appendend 
in the url expose us to security issue.
*/

echo $_POST["username1"] . "<br>";
echo $_POST["password1"] . "<br>";

/*
When using post the data are in HTTP so the values are secure and do not get exposed.
*/
?>