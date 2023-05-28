<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function checkstring($Chain, $searchwords) {
    if (strpos($Chain, $searchwords) !== false) {
        echo "Chain '$Chain' contain words '$searchwords'.";
    } else {
        echo "Chain '$Chain' does not contain the word '$searchwords'.";
    }
}
$Chain = "Nguyen Thi Lan";
$searchwords = "Lan";
checkstring($Chain, $searchwords);
?>
