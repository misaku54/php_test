<?php

// 癖があるのでできればif文の方がよい。
// なぜかというとcaseの後にbreakをはさまないと次の処理が実行されるためrubyとちがうjs寄り
// またswitchの場合は==と同じで厳密等価演算ではないため、型を見ずに一致不一致を決める。ただ、厳密にする方法もある

$data = 1;

switch($data){
  case 1:
    echo '１です。';
    break; // 忘れないように。なければ次の処理が実行される。
  case 2:
    echo '2です。';
    break;
  case 3:
    echo '3です。';
    break;
  default:
    echo '1-3ではありません。';
}

echo '<br>';

// 厳密にする方法
$data_2 = 2;

switch($data_2){
  case 1:
    echo '１です。';
    break; // 忘れないように。なければ次の処理が実行される。
  case $data_2 === 2:
    echo '2です。';
    break;
  case 3:
    echo '3です。';
    break;
  default:
    echo '1-3ではありません。';
}



?>