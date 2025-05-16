<?php
echo "<h2>All Important Array Functions in PHP</h2>";

$arr = [10, 20, 30, 40, 50];

echo "Count: " . count($arr) . "<br>";

array_push($arr, 60);
echo "After Push: ";
print_r($arr);
echo "<br>";

array_pop($arr);
echo "After Pop: ";
print_r($arr);
echo "<br>";

$arr2 = [70, 80];
$merged = array_merge($arr, $arr2);
echo "Merged: ";
print_r($merged);
echo "<br>";

$dup = [1,2,2,3,3,3];
$unique = array_unique($dup);
echo "Unique: ";
print_r($unique);
echo "<br>";


$rev = array_reverse($arr);
echo "Reversed: ";
print_r($rev);
echo "<br>";


$diff = array_diff([1, 2, 3], [2]);
echo "Diff: ";
print_r($diff);
echo "<br>";

?>