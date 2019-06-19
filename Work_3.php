<?php
//1
function _2x($x) {
echo $x * 2;
echo "\n";
}
_2x(7);

//1

//2
function a_b($a,$b){
    $sum=$a+$b;
    echo $sum;
    echo "\n";
}
a_b(3,5);
//2

//3
function allx($arr){
$total=1;
foreach($arr as $ar){
    $total*=$ar;
}
echo $total;
echo "\n";
}
allx( array(1,3,5,7,9));
//3


//4
function max_array($arr){
 $max_number = max($arr);

 echo $max_number;
 echo "\n";
 }
 max_array( array(5,6,7));
//4

//5 strip_tags
$text='<p>"文章A"</p><ex>"文章B"</ex>';

echo $text;
echo"\n";
echo strip_tags($text);
echo"\n";
echo strip_tags($text,'<p>');
echo"\n";
// strip_tags

// array_push
$country=['Japan','U.S.','U.K.'];
print_r($country);
array_push($country,'China','Russia');
print_r($country);
echo "\n";
// array_push

//array_merge
$array1=['apple','orange','grape'];
$array2=[22,33,44];
$array3=array_merge($array1,$array2);
print_r($array3);
//array_merge

//time,mktime 
echo"現在のタイムスタンプ：".time();
echo"\n";
echo"2019/6/20,18:30".mktime(18,30,0,6,20,2019);
echo"\n";
//time,mktime

//date
date_default_timezone_set('Asia/Tokyo');
echo '現在の時刻：'.date("Y/m/d H:i:s");
echo "\n";
//date , 5
?>

