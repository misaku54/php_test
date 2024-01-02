<?php
// 関数リファレンスを見れば組み込み関数が書いてある。

// マルチバイト日本語の場合文字コードが２種類ある
// SJIS UTF-8
// 国際基準はUTF-8となっており、この場合日本語が１文字３〜６バイトとなっている
// そのためstrlen関数の引数に日本語を渡すとバイト数を返すため、文字数とイコールにならない。


// バイト数を求める　strlenを使う
$text_1 = 'abc';
$text_2 = 'あいうえお';

echo strlen($text_1); // 3
echo '<br>';
echo strlen($text_2); // 15

echo '<br>';
// 文字列の長さを求める　mb_strlen(マルチバイト)
echo mb_strlen($text_2);


echo '<br>';
// 文字列を置換するstr_replace
$str = '文字列を置換します。';
echo str_replace('置換','ちかん',$str);

?>