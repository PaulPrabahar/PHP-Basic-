<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <label>Log info</label><br>
    <a href="session.php">This goes to the session page.</a><br>
</body>

</html>

<?php
$_SESSION['username'] = 'paul';
$_SESSION['password'] = 'luap';

echo "username {$_SESSION['username']}<br>";
echo "password {$_SESSION['password']}<br>";
?>