<?php
$height = 91;

// !== 型が同じかどうかも合わせて判定　こっち使う
// != 
if ($height !== 90){
  echo '身長は90cmではありません。';
}

// データが入っているかどうか
// isset empty is_null
$test = '1';

if (empty($test)){
  echo '変数は空です。';
}
// 否定形の場合頭に！をつける
if (!empty($test)){
  echo '変数に値が入ってます。';
}


// ANDとOR ||==or &&==and rubyと違う
$signal_1 = 'red';
$signal_2 = 'yellow';

if ($signal_1 === 'red' && $signal_2 === 'yellow'){
  echo '赤です。';
}


// 三項演算子
$math = 80;

$comment = $math > 80 ? 'good' : 'not good';
echo $comment;

?>