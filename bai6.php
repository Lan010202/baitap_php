<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function arrange ($array){
    sort($array);
    return $array;
}
$array = [7, 3, 2,8];
$arrange = arrange($array);

echo "The array has been sorted in ascending order: ";
foreach ($arrange as $value) {
    echo $value . " ";
}
?>