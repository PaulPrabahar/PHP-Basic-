<?php
//Variables it is denoted by '$' followed by a unique name
//1.String:
$name = "Bro";
echo $name; //echo:-for output display.

$name1 = "paul paul"; // Whitespace are included.
echo $name1;

//using String literal.
echo "<br>hello {$name} and you're {$name1} is it correct.<br>"; //brackets are used to denote the variable inside a string.
//note:-String literal can be used only by double quotes.
//Single quotes are used for string interpolation.   

//2.Integer:
$number = 21;
echo $number;
echo "<br> My Lucky number is {$number}.<br>";
echo '<br> My Lucky number is {$number}.<br>'; // string interpolaton example.

$float = 5.88;
echo $float;
echo "<br> your pizza is {$float} <br>";

//escape sequence.
echo "<br> your pizza is \${$float} <br>"; // By using '\' we can escape a sequence.

//3.Boolean true = 1 and false = 0.
$True = true;
$False = false;

echo "status:{$True}<br>"; // the op displayed is 1.
echo "status:{$False}<br>"; // the op will not be displayed.