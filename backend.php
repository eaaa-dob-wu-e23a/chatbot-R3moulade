<?php
$number1 = $_GET["number1"];
$number2 = $_GET["number2"];

$sum = $number1 + $number2;

header('location: calculator.php?sum=' . $sum . '&test=42') ;
exit;
?>