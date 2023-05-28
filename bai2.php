<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function total($n) {
    $total = 0;
    for ($i = 1; $i <= $n; $i++) {
        $total += $i;
    }
    return $total;
}
$n = 10;
$result = total($n);
echo "The sum of numbers from 1 to $n is: $result";
?>
