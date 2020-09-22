<?php
//課題１
function sum($max){
 $result = $max * 2;
 echo $result;
}
echo sum(100);
echo "\n";

//課題２
function f($a, $b){
 return $a + $b;
}
$result = f(1,2);
echo $result;
echo "\n";

//課題３
$arr = array(1,3,5,7,9);
function multiplay ($arr){
 $result = 1;
 foreach($arr as $a) {
  $result *= $a;
 }
 return $result;
}
echo multiplay($arr);
echo "\n";

//課題４
$arr = array(1,2,3,4);
function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
  if ($max_number < $a){
      $max_number = $a;
  }
 }
 return $max_number;
}
echo max_array($arr);
echo "\n";

//課題５
//--strip_tags--//
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
// <p> と <a> は許可します
echo strip_tags($text, '<p><a>');

//--array_push--//
$array = ["apple", "orange"];
$arrayLength = array_push($array, "melon", "banana");
// 配列の要素数を出力
echo $arrayLength."\n";
// 要素追加後の配列を出力
print_r($array);

//--array_merge--//
$fruits1 = ['apple', 'orange', 'melon', 'banana', 'pineapple'];
$fruits2 = ['strawberry', 'cherry', 'watermelon'];
$fruits3 = ['anzu', 'papaya'];
 
$fruits_merge = array_merge($fruits1, $fruits2, $fruits3);
 
print_r($fruits_merge);

//--time, mktime--//
$time = mktime(9);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');

  $time = mktime(10, 10, 10);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');

  $time = mktime(0, 0, 0, 1, 1, 2020);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');
  
//--date--//
print(date('Y年m月d日'));

?>
