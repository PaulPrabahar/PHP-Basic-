<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total calculator</title>
</head>

<body>
    <form action="challange1.php" method="post">
        <label>Quantity</label>
        <input type="number" name="quantityno">
        <input type="submit" value="submit">
    </form>
</body>

</html>
<?php
$item = "Pizza";
$price = 5.36;
$quantity = $_POST['quantityno'];
$total = null;

$total = $price * $quantity;

echo "Your total for the {$item} are: \${$total}<br>";
echo "Note: Today's pizza rate: \${$price}<br>";

?>