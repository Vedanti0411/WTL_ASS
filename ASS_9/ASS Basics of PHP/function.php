<?php
function calculateSum($numbers) {
    $sum = 0;
    foreach ($numbers as $num) {
        $sum += $num;
    }
    return $sum;
}

// Example usage
$myNumbers = [67, 78, 98];
echo "The sum is: " . calculateSum($myNumbers);
?>
