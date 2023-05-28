<!DOCTYPE html>
<html>
<body>
<?php
//bai1: Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không
function isEven($number){
    if($number % 2 ==0){
        return true;
    }
    else{
        return false;
    }
}
$number=10;
if(isEven($number)){
    echo "$number this is an even number";
}else{
    echo "$number this is not an even number";
}
?>

