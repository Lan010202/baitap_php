<?php
//Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function AddToTheTop($array, $element) {
    array_unshift($array, $element);
    return $array;
}

$array = [2, 3, 4, 5];
$element = 1;
$ArrayAfterAddingToTheBeginning = AddToTheTop($array, $element);
echo "Array after adding $element to the beginning: " . implode(", ", $ArrayAfterAddingToTheBeginning);
?>
