<?php

$array = [1,2,3];

// これだと中身が表示されない。
echo $array;
// 指定する必要がある。
echo $array[1];
// まとめて中身を見たい
echo '<pre>'; // このタグをつかうことで配列を横にできる。
var_dump($array);
echo '</pre>';

// 文字列も可能
$array_2 = ['あ','う','い'];
var_dump($array_2);

// 複数配列も格納可能
$array_3 = [
  ['赤','青','黄色'],
  ['翠','黒','紫']
];

echo '<pre>';
var_dump($array_3);
echo '<pre>';

// 行列で指定
echo $array_3[0][2];

?>