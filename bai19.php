<?php
//Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sortdescending($array) {
    rsort($array);
    return $array;
}
$array = [5, 2, 8, 1, 4];
$sortarray = sortdescending($array);
echo "Array after sorting descending: " . implode(", ", $sortarray);
?>
