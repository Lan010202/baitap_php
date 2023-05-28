<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function factorialcalculation($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n *  factorialcalculation($n - 1);
    }
}
$integer = 7;
$factorial =  factorialcalculation($integer);
echo "factorial of $integer là: $factorial";
?>
