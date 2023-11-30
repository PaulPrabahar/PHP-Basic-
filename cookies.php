<?php
/*
Cookies are used to store non-sensitive data about the user in the user 
web browser.

To create cookies we use the function setcookie();
*/

setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
setcookie("fav_drink", "coffee", time() + (86400 * 2), "/");
setcookie("fav_snack", "Chips", time() + (86400 * 2), "/");

if (isset($_COOKIE["fav_food"])) {
    echo "buy some {$_COOKIE['fav_food']} !!!<br>";
} else {
    echo "I don't know your favourit food";
}

foreach ($_COOKIE as $key => $value) {
    if ($key == "PHPSESSID") {
        continue;
    }
    echo "Info {$key} = {$value}<br>";
}
