<?php
$age = 20;

echo "<h3>Age: $age</h3>";

if ($age < 0) {
    echo "Invalid age.";
} elseif ($age < 18) {
    echo "You are a minor. Not eligible for voting.";
} elseif ($age >= 18 && $age < 21) {
    echo "You can vote and drive....";
} elseif ($age >= 21) {
    echo "You are eligible to vote, drive and drink......";
}

$dayNumber = 3;

echo "<h3>Switch Case Example</h3>";
echo "Day Number: $dayNumber<br>";

switch ($dayNumber) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid Day Number";
}
?>

