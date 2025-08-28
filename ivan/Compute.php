<?php

$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$n3 = $_POST['num3'];
$n4 = $_POST['num4'];

$sum = $n1 + $n2;
$diff = $n4 - $n3;
$prod = $n1 * $n3;
$quo = $n2 / $n3;
$ave = ($n1 + $n2 + $n3 + $n4) / 4;

echo "The sum of $n1 and $n2 Is $sum <br>";
echo "The Difference of $n4 and $n3 Is $diff <br>";
echo "The Product of $n1 and $n3 Is $prod <br>";
echo "The Qoutient of $n2 and $n3 Is ".round($quo, 2);
echo "<br>The Average of $n1, $n2, $n3, $n4 Is $ave <br>";
?>   