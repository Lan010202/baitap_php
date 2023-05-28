<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để tính tổng của các số trong một mảng.
function total($array) {
    $total = 0;
    foreach ($array as $value) {
        $total += $value;
    }
    return $total;
}
$array = [1, 2, 3, 4, 5];
$total = total($array);
echo "The sum of the numbers in the array is: $total";
?>
