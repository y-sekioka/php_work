<?php

//課題1
$name = "Sekioka";
if($name=="Sekioka"){
    echo "私は Sekioka です";
} else{
    echo "あなたの名前ではありません";
}

//課題2
$answer=0;
for($i = 1; $i <= 10000; $i++){
    $answer= $answer+$i;
}
echo $answer;


//課題3
$fruits= array("apple","orange","grape","cherry","peach");

foreach($fruits as $fruit){
    echo $fruit." ";
}


//課題4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}
