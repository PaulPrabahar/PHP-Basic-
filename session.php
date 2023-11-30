<?php

/*

Session are used to store information on a user to be used across multiple pages.
A user across multiple pages. A session id is created created for each session to
access data.

*/

session_start(); // to start a session and presest data across multiple pages.
// Note the we need to use this before html. 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session in php</title>
</head>

<body>
    <label>session info</label><br>
    <a href="index.php">This goes to the index page.</a><br>
</body>

</html>

<?php
echo "username {$_SESSION['username']}<br>";
echo "password {$_SESSION['password']}<br>";
?>