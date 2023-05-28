<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function calculatethenumberofelements($array) {
    $count = count($array);
    return $count;
}

$array = [1, 2, 3, 4, 5];
$numberofelements = calculatethenumberofelements($array);

echo "Number of elements in the array: " . $numberofelements;
?>
