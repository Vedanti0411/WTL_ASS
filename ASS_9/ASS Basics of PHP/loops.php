<?php
echo "<h3>Even Numbers (1 to 20) using while loop:</h3>";

$num = 2;
while ($num <= 20) {
    echo $num . "<br>";
    $num += 2;
}

echo "<h3>Numbers from 1 to 10 using for loop:</h3>";

for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}



echo "<h3>Countdown using do-while loop:</h3>";

$count = 5;
do {
    echo $count . "<br>";
    $count--;
} while ($count > 0);

$num = 5;
$factorial = 1;
for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}
echo "Factorial of $num: $factorial <br>";
?>

