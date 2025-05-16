<?php
echo "<h3>Calculations</h3>";

// Add three numbers
$a = 10;
$b = 20;
$c = 30;
$sum = $a + $b + $c;
echo "Sum: $sum <br>";

// Factorial
$num = 5;
$factorial = 1;
for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}
echo "Factorial of $num: $factorial <br>";

// Greatest number
$x = 100;
$y = 200;
$z = 150;
$greatest = max($x, $y, $z);
echo "Greatest: $greatest <br>";

// Conditional
$mark = 75;
if ($mark >= 90) {
    echo "Grade: A+<br>";
} elseif ($mark >= 75) {
    echo "Grade: A<br>";
} else {
    echo "Grade: B or below<br>";
}
?>
