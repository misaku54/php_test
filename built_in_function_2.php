<?php
// 文字列を分割し、配列で返す関数　explode
$str_2 = '指定文字列で、分割します';

echo '<pre>';
var_dump(explode('、', $str_2));
echo '</pre>';


// 正規表現
$str_3 = '特定の文字列が含まれるか確認する';

echo preg_match('/文字列/',$str_3); // 見つかったので１を返す（数値型）

echo '<br>';
// 指定数以降を切り取る
// 数値or英語の場合 substr
echo substr('123', 2); //添字が２以降の文字列
echo '<br>';
echo substr('abc', 1);
echo '<br>';
echo substr('あいうえお', 1); //文字化けするのでマルチバイト関数を使う。
echo '<br>';
echo mb_substr('あいうえお', 2); 
?>
