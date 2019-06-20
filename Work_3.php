<?php
//1
function multi_double ($num) {
    return $num * 2;
}
echo multi_double(7) . "\n";

//1

//2
function sum($a , $b){
    return $a + $b;
}
echo sum(3,5) . "\n";
//2

//3
function multiple_all($arr){
    $total=1;
    foreach($arr as $num){
        $total*=$num;
}
    return $total;
}
echo multiple_all(array(1,3,5,7,9)) . "\n";
//3


//4
function max_array($arr){
    $max_number = max($arr);
    return $max_number;
 }
echo max_array(array(5,6,7,54,5,75,1)) . "\n";
//4

//5 strip_tags
$text='<p>"文章A"</p><ex>"文章B"</ex>';

echo $text . "\n";
echo strip_tags($text) . "\n";
echo strip_tags($text,'<p>') . "\n";
// strip_tags

// array_push
$country=['Japan','U.S.','U.K.'];
print_r($country);
array_push($country,'China','Russia');
print_r($country) . "\n";
// array_push

//array_merge
$array1=['apple','orange','grape'];
$array2=[22,33,44];
$array3=array_merge($array1,$array2);
print_r($array3);
//array_merge

//time,mktime 
echo"現在のタイムスタンプ：" . time() . "\n";
echo"2019/6/20,18:30" . mktime(18,30,0,6,20,2019) . "\n";
//time,mktime

//date
date_default_timezone_set('Asia/Tokyo');
echo '現在の時刻：' . date("Y/m/d H:i:s") . "\n";
//date , 5
?>