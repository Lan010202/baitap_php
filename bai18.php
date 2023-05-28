<?php
//Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countoccurrences($array, $element) {
    $count = 0;
    foreach ($array as $value) {
        if ($value === $element) {
            $count++;
        }
    }

    return $count;
}
$array = [1, 2, 3, 2, 4, 3, 5, 6, 5];
$element = 3;
$thenumberofoccurrences = countoccurrences($array, $element);
echo "The number of occurrences of the $element element in the array: " . $thenumberofoccurrences ;
?>
