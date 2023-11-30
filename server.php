<!-- In php to get the information aboout the server and the execution enviroment
we use the super global variable $_SERVER . This variable is a associative
array which is used to contain various details like headers, path and script location.
-->

<?php
foreach ($_SERVER as $key => $value) {
    echo "{$key} = {$value} <br>";
}
?>