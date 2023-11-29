<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitization and Validation</title>
</head>

<body>
    <form action="sanitize_validate.php" method="post">
        <label>Username:&nbsp;</label>
        <input type="text" name="username">
        <label>age:&nbsp;</label>
        <input type="text" name="age">
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {

    $username = filter_input(
        INPUT_POST,
        "username", //with filter input function we can sanitize input data in many way's
        FILTER_SANITIZE_SPECIAL_CHARS
    );
    echo "hello {$username}";

    //validation.

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    if (empty($age)) {  //with filter input function we can validate input data in many way's
        echo "That number wasn't valid.";
    } else {
        echo "You are $age year's old";
    }
}

?>