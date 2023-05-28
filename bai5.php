<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function findthemaximumvalue($array) {
    $themaximumvalue = $array[0];
    foreach ($array as $number) {
        if ($number > $themaximumvalue) {
            $themaximumvalue = $number;
        }
    }
    return $themaximumvalue;
}
function findtheminimumvalue($array) {
    $theminimumvalue = $array[0];
    foreach ($array as $number) {
        if ($number < $theminimumvalue) {
            $theminimumvalue = $number;
        }
    }
    return $theminimumvalue;
}
$array = array(5, 9, 7, 3, 8);
$themaximumvalue = findthemaximumvalue($array);
echo "The most most value in array is: $themaximumvalue <p>";
$theminimumvalue = findtheminimumvalue($array);
echo "The smallest value in the array is: $theminimumvalue";
?>
