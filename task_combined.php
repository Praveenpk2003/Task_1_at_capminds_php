<?php

//Simple Calculator 

echo "----- Calculator Results -----<br>";

$a = 25;
$b = 5;

function add($x, $y){
    return $x + $y;
}
function subtract($x, $y){
    return $x - $y;
}
function multiply($x, $y){
    return $x * $y;
}
function divide($x, $y){
    return $x / $y;
}

echo "Addition: " . add($a, $b) . "<br>";
echo "Subtraction: " . subtract($a, $b) . "<br>";
echo "Multiplication: " . multiply($a, $b) . "<br>";
echo "Division: " . divide($a, $b) . "<br><br>";




//Student Grade Calculator

echo "----- Student Grade Calculation -----<br>";

$mark1 = 78;
$mark2 = 85;
$mark3 = 90;

$total = $mark1 + $mark2 + $mark3;
$average = $total / 3;


if ($average >= 90){
    $grade = "A";
} elseif ($average >= 75){
    $grade = "B";
} elseif ($average >= 50){
    $grade = "C";
} else {
    $grade = "Fail";
}

echo "Total Marks : $total<br>";
echo "Average : " . number_format($average, 2) . "<br>";
echo "Grade : $grade<br>";

?>
