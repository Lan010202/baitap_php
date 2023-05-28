<?php
function reverseString($string) {
    $length = strlen($string);
    $reversedString = '';

    // Duyệt qua các ký tự của chuỗi từ cuối đến đầu
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }

    return $reversedString;
}

// Chuỗi ban đầu
$string = "Nguyen Thi Lan";

// Đảo ngược chuỗi
$reversedString = reverseString($string);

// In chuỗi đã đảo ngược
echo "String has been reversed: $reversedString";
?>
