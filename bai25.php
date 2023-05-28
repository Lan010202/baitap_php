<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrime($number) {
    // Kiểm tra các trường hợp đặc biệt
    if ($number <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
// Số cần kiểm tra
$number = 75;

// Kiểm tra xem số có phải là số nguyên tố hay không
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
