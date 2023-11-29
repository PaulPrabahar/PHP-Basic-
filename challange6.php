<!-- To find the hypatenous of a triangle
get values from the user length's of side a and side b
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypotenous finder</title>
</head>

<body>
    <form action="challange6.php" method="post">
        <label>side A:&nbsp;</label>
        <input type="text" name="sidea"><br>
        <label>side B:&nbsp;</label>
        <input type="text" name="sideb"><br>
        <input type="submit" value="calculate">
    </form>
</body>

</html>
<?php

$sidea = isset($_POST['sidea']) ? $_POST['sidea'] : "";
$sideb = isset($_POST['sideb']) ? $_POST['sideb'] : "";

function side_result($side1, $side2)
{
    $result = pow($side1, 2) + pow($side2, 2);
    return $result;
}

$hypoteneous = side_result($sidea, $sideb);
$hypoteneous = sqrt($hypoteneous);

echo "Since the length of first is {$sidea} and length of second is {$sideb} <br>";
echo "then the hypoteneous is {$hypoteneous}."

?>