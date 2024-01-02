<?php

// for 繰り返す値が決まっていたら。
// while 繰り返す値が決まっていなかったら

// ループ内で使うcontinue break
// continueは次のループへ　ruby next
// breakはループを抜ける。

for($i = 0; $i < 10; $i++){
  if($i === 5){
  // break
  // continue
  }
  echo $i;
}

echo '<br>';

$j = 0;
while($j < 5){
  echo $j;
  $j++;
}

echo '<br>';

// do whileもあるがほとんど使わない
do{echo $j;}
while($j < 5);

?>