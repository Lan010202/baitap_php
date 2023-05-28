<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeduplicates($array) {
    $uniqueArray = array_unique($array);
    return $uniqueArray;
}

$array = [1, 2, 3, 2, 4, 3, 5, 6, 5];
$uniqueArray = removeduplicates($array);

echo "Array after removing duplicates: ";
foreach ($uniqueArray as $value) {
    echo $value . " ";
}
?>
