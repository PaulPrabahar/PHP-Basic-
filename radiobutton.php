<!-- An example for  using radio button in the php   -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio button</title>
</head>

<body>
    <form action="radiobutton.php" method="post">
        <label>Cards:&nbsp;</label><br>
        <input type="radio" name="creditcard" value="Visa">Visa<br>
        <input type="radio" name="creditcard" value="Master Card">Master card<br>
        <input type="radio" name="creditcard" value="UPI">UPI<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>

</html>

<?php


$confirm = $_POST['confirm'];
$credit_card = null; // To avoid initial empty warning

if (isset($confirm)) {
    $credit_card = $_POST['creditcard'];
    if (isset($credit_card)) {
        switch ($credit_card) {
            case "Visa":
                echo "You selected {$credit_card}";
                break;
            case "Master Card":
                echo "You selected {$credit_card}";
                break;
            case "UPI":
                echo "You selected {$credit_card}";
                break;
            default:
                echo "Payment option not selected";
        }
    } else {
        echo "Payment option not selected";
    }
}

?>