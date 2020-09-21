<?php
//課題１
$name = "大坪";
if ($name == "田中") {
   echo "あなたの名前ではありません";
 } else {
   echo "私は大坪です" . "\n";
 }
 
//課題２
$total = 0;

for ($i = 0; $i <= 1000; $i++) {
  $total += $i;
}
echo $total. "\n";

//課題３
$fruits = array("りんご", "ぶどう", "みかん", "レモン", "ばなな");
foreach($fruits as $fruit){
  echo  $fruit;
  echo "\n";
}
  
//応用課題
$start = 1;
$end = 100;

for($i = 1; $i <= 100; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}